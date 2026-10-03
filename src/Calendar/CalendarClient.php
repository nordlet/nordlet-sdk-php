<?php

namespace Nordlet\Calendar;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Calendar\Requests\PostV1CalendarListRequest;
use Nordlet\Calendar\Types\PostV1CalendarListResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Calendar\Requests\PostV1CalendarGetRequest;
use Nordlet\Calendar\Types\PostV1CalendarGetResponse;
use Nordlet\Calendar\Requests\PostV1CalendarSubmitRequest;
use Nordlet\Calendar\Types\PostV1CalendarSubmitResponse;
use Nordlet\Calendar\Requests\PostV1CalendarDownloadRequest;
use Nordlet\Calendar\Types\PostV1CalendarDownloadResponse;
use Nordlet\Calendar\Requests\PostV1CalendarCreateRequest;
use Nordlet\Calendar\Types\PostV1CalendarCreateResponse;
use Nordlet\Calendar\Requests\PostV1CalendarUpdateRequest;
use Nordlet\Calendar\Types\PostV1CalendarUpdateResponse;
use Nordlet\Calendar\Requests\PostV1CalendarDeleteRequest;
use Nordlet\Calendar\Types\PostV1CalendarDeleteResponse;

class CalendarClient
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
     * @param PostV1CalendarListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1CalendarListResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1CalendarList(PostV1CalendarListRequest $request = new PostV1CalendarListRequest(), ?array $options = null): ?PostV1CalendarListResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/calendar/list",
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
                return PostV1CalendarListResponse::fromJson($json);
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

    /**
     * @param PostV1CalendarGetRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1CalendarGetResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1CalendarGet(PostV1CalendarGetRequest $request, ?array $options = null): ?PostV1CalendarGetResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/calendar/get",
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
                return PostV1CalendarGetResponse::fromJson($json);
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

    /**
     * @param PostV1CalendarSubmitRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1CalendarSubmitResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function generateTheFilingForADeadlineAndSendItToTheAdministration(PostV1CalendarSubmitRequest $request, ?array $options = null): ?PostV1CalendarSubmitResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/calendar/submit",
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
                return PostV1CalendarSubmitResponse::fromJson($json);
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

    /**
     * Builds the file of a deadline whose format Nordlet produces but whose administration takes it only through the company's own account or program. Nothing is sent and no filing is recorded.
     *
     * @param PostV1CalendarDownloadRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1CalendarDownloadResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function generateTheFileOfADeadlineForTheCompanyToSendItself(PostV1CalendarDownloadRequest $request, ?array $options = null): ?PostV1CalendarDownloadResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/calendar/download",
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
                return PostV1CalendarDownloadResponse::fromJson($json);
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

    /**
     * @param PostV1CalendarCreateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1CalendarCreateResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1CalendarCreate(PostV1CalendarCreateRequest $request, ?array $options = null): ?PostV1CalendarCreateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/calendar/create",
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
                return PostV1CalendarCreateResponse::fromJson($json);
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

    /**
     * @param PostV1CalendarUpdateRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1CalendarUpdateResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1CalendarUpdate(PostV1CalendarUpdateRequest $request, ?array $options = null): ?PostV1CalendarUpdateResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/calendar/update",
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
                return PostV1CalendarUpdateResponse::fromJson($json);
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

    /**
     * @param PostV1CalendarDeleteRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostV1CalendarDeleteResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postV1CalendarDelete(PostV1CalendarDeleteRequest $request, ?array $options = null): ?PostV1CalendarDeleteResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/calendar/delete",
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
                return PostV1CalendarDeleteResponse::fromJson($json);
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
