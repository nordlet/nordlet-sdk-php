<?php

namespace Nordlet\Review;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Review\Requests\QueueListReviewRequest;
use Nordlet\Review\Types\QueueListReviewResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;

class ReviewClient
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * Read-only. Lists, each with its `kind`, the `id` of the record, a `message` and the `fix` (the call or field that resolves it): `draft_warning` (a draft purchase or sale document with a warning of `purchases/invoices/create` or `sales/invoices/create`, one item per warning, with its `code`), `bank_transaction_unbooked` (a bank line with the status `new`), `partner_vat_invalid` (a partner whose VAT number failed its VIES check) and `filing_settings_missing` (a filing due in the window of `account/companies/context` whose settings are missing, with the `declarations/configs/update` call; the id is the calendar key) and `file_unattached` (a file stored with `files/upload` or an upload link without `entityId` and not yet given as a document of a record, such as a document no other call fits). Each kind lists at most 200 records, the newest first. An empty list means nothing needs a look.
     *
     * @param QueueListReviewRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?QueueListReviewResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function queueList(QueueListReviewRequest $request = new QueueListReviewRequest(), ?array $options = null): ?QueueListReviewResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/review/queue/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return QueueListReviewResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
