<?php

namespace Nordlet\Agreements;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Agreements\Requests\SettingsGetAgreementsRequest;
use Nordlet\Agreements\Types\SettingsGetAgreementsResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Agreements\Requests\SettingsUpdateAgreementsRequest;
use Nordlet\Agreements\Types\SettingsUpdateAgreementsResponse;
use Nordlet\Agreements\Requests\TypesCreateAgreementsRequest;
use Nordlet\Agreements\Types\TypesCreateAgreementsResponse;
use Nordlet\Agreements\Requests\TypesListAgreementsRequest;
use Nordlet\Agreements\Types\TypesListAgreementsResponse;
use Nordlet\Agreements\Requests\AgreementsCreateAgreementsRequest;
use Nordlet\Agreements\Types\AgreementsCreateAgreementsResponse;
use Nordlet\Agreements\Requests\AgreementsGetAgreementsRequest;
use Nordlet\Agreements\Types\AgreementsGetAgreementsResponse;
use Nordlet\Agreements\Requests\AgreementsUpdateAgreementsRequest;
use Nordlet\Agreements\Types\AgreementsUpdateAgreementsResponse;
use Nordlet\Agreements\Requests\AgreementsDeleteAgreementsRequest;
use Nordlet\Agreements\Types\AgreementsDeleteAgreementsResponse;
use Nordlet\Agreements\Requests\AgreementsListAgreementsRequest;
use Nordlet\Agreements\Types\AgreementsListAgreementsResponse;
use Nordlet\Agreements\Requests\AgreementsGenerateInvoiceAgreementsRequest;
use Nordlet\Agreements\Types\AgreementsGenerateInvoiceAgreementsResponse;
use Nordlet\Agreements\Requests\AgreementsBillingRunAgreementsRequest;
use Nordlet\Agreements\Types\AgreementsBillingRunAgreementsResponse;
use Nordlet\Agreements\Requests\InsurancePoliciesCreateAgreementsRequest;
use Nordlet\Agreements\Types\InsurancePoliciesCreateAgreementsResponse;
use Nordlet\Agreements\Requests\InsurancePoliciesListAgreementsRequest;
use Nordlet\Agreements\Types\InsurancePoliciesListAgreementsResponse;
use Nordlet\Agreements\Requests\InsurancePoliciesDeleteAgreementsRequest;
use Nordlet\Agreements\Types\InsurancePoliciesDeleteAgreementsResponse;

class AgreementsClient
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
     * Return whether automatic agreement billing is switched on for the company.
     *
     * @param SettingsGetAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettingsGetAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settingsGet(SettingsGetAgreementsRequest $request = new SettingsGetAgreementsRequest(), ?array $options = null): ?SettingsGetAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/settings/get",
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
                return SettingsGetAgreementsResponse::fromJson($json);
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
     * Switch automatic agreement billing on or off for the company. With it on, a scheduled job runs the same billing as `agreements/agreements/billing/run` for the company once a day.
     *
     * @param SettingsUpdateAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettingsUpdateAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settingsUpdate(SettingsUpdateAgreementsRequest $request, ?array $options = null): ?SettingsUpdateAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/settings/update",
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
                return SettingsUpdateAgreementsResponse::fromJson($json);
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
     * Create an agreement type with a `code` and a `name`. Answers 409 when the company already has a type with that code.
     *
     * @param TypesCreateAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TypesCreateAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function typesCreate(TypesCreateAgreementsRequest $request, ?array $options = null): ?TypesCreateAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/types/create",
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
                return TypesCreateAgreementsResponse::fromJson($json);
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
     * List the company's agreement types. Filterable and sortable by `code` and `name`.
     *
     * @param TypesListAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TypesListAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function typesList(TypesListAgreementsRequest $request = new TypesListAgreementsRequest(), ?array $options = null): ?TypesListAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/types/list",
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
                return TypesListAgreementsResponse::fromJson($json);
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
     * Create an agreement for exactly one party, a partner, an employee or a bank account, which must exist in the company (400 otherwise). Without `kind`, an employee agreement is `employment`, a bank account agreement is `bank` and a partner agreement is `other`; a `documentRef` (the `storageKey` of an uploaded file) attaches that file to the agreement. Answers 409 when the company already has an agreement with that `number`.
     *
     * @param AgreementsCreateAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AgreementsCreateAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function agreementsCreate(AgreementsCreateAgreementsRequest $request, ?array $options = null): ?AgreementsCreateAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/agreements/create",
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
                return AgreementsCreateAgreementsResponse::fromJson($json);
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
     * Return one agreement with its items.
     *
     * @param AgreementsGetAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AgreementsGetAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function agreementsGet(AgreementsGetAgreementsRequest $request, ?array $options = null): ?AgreementsGetAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/agreements/get",
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
                return AgreementsGetAgreementsResponse::fromJson($json);
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
     * Change the given fields of an agreement and return it with its items. The party, `number`, `startDate`, `currency` and items are not changed by this call.
     *
     * @param AgreementsUpdateAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AgreementsUpdateAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function agreementsUpdate(AgreementsUpdateAgreementsRequest $request, ?array $options = null): ?AgreementsUpdateAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/agreements/update",
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
                return AgreementsUpdateAgreementsResponse::fromJson($json);
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
     * Mark an agreement as deleted. It is no longer returned, changed or billed.
     *
     * @param AgreementsDeleteAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AgreementsDeleteAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function agreementsDelete(AgreementsDeleteAgreementsRequest $request, ?array $options = null): ?AgreementsDeleteAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/agreements/delete",
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
                return AgreementsDeleteAgreementsResponse::fromJson($json);
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
     * List the company's agreements without their items, each with `partnerName`. Filterable by `number`, `name`, `partnerId`, `employeeId`, `bankAccountId`, `kind`, `typeId`, `status`, `startDate`, `endDate` and `value`; sortable by `number`, `startDate` and `createdAt` (default `startDate` descending).
     *
     * @param AgreementsListAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AgreementsListAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function agreementsList(AgreementsListAgreementsRequest $request = new AgreementsListAgreementsRequest(), ?array $options = null): ?AgreementsListAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/agreements/list",
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
                return AgreementsListAgreementsResponse::fromJson($json);
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
     * Create a draft sale invoice for the next unbilled period of an active agreement that has a partner and a `billingPeriod`. The period follows the monthly, quarterly or annual grid from `startDate`, continues after the last period already invoiced for the agreement, and is prorated by days when it starts late or is cut by `endDate`; an `autoRenew` agreement has its `endDate` moved forward by whole terms instead (`renewedEndDate`). The lines come from the agreement items, else one line of `value`, with revenue recognised ratably over the period. Answers 422 when the agreement is not active, has no partner, billing period, items or value, carries VAT while the company is not a VAT payer, is fully billed through its end date, or when the next period starts after `asOfDate` (default today). Emits `agreement.invoice_generated`.
     *
     * @param AgreementsGenerateInvoiceAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AgreementsGenerateInvoiceAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function agreementsGenerateInvoice(AgreementsGenerateInvoiceAgreementsRequest $request, ?array $options = null): ?AgreementsGenerateInvoiceAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/agreements/generate-invoice",
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
                return AgreementsGenerateInvoiceAgreementsResponse::fromJson($json);
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
     * Generate the invoices due up to `asOfDate` (default today) for every active agreement of the company that has a partner and a billing period, one invoice per period and at most 60 per agreement in one run, in the same way as `agreements/agreements/generate-invoice`. An agreement that is fully billed and whose `endDate` has passed is set to `expired`. A failing agreement is listed in `errors` and does not stop the run. Each invoice emits `agreement.invoice_generated`.
     *
     * @param AgreementsBillingRunAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AgreementsBillingRunAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function agreementsBillingRun(AgreementsBillingRunAgreementsRequest $request = new AgreementsBillingRunAgreementsRequest(), ?array $options = null): ?AgreementsBillingRunAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/agreements/billing/run",
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
                return AgreementsBillingRunAgreementsResponse::fromJson($json);
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
     * Create an insurance policy. Answers 422 when `toDate` is before `fromDate`, 400 when `insurerPartnerId` is not a partner of the company, and 409 when the company already has a policy with that `policyNumber`.
     *
     * @param InsurancePoliciesCreateAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InsurancePoliciesCreateAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function insurancePoliciesCreate(InsurancePoliciesCreateAgreementsRequest $request, ?array $options = null): ?InsurancePoliciesCreateAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/insurance-policies/create",
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
                return InsurancePoliciesCreateAgreementsResponse::fromJson($json);
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
     * List the company's insurance policies. Filterable by `policyNumber`, `insurerPartnerId` and `toDate`; sortable by `policyNumber` and `toDate` (default `toDate` descending).
     *
     * @param InsurancePoliciesListAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InsurancePoliciesListAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function insurancePoliciesList(InsurancePoliciesListAgreementsRequest $request = new InsurancePoliciesListAgreementsRequest(), ?array $options = null): ?InsurancePoliciesListAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/insurance-policies/list",
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
                return InsurancePoliciesListAgreementsResponse::fromJson($json);
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
     * Mark an insurance policy as deleted.
     *
     * @param InsurancePoliciesDeleteAgreementsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InsurancePoliciesDeleteAgreementsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function insurancePoliciesDelete(InsurancePoliciesDeleteAgreementsRequest $request, ?array $options = null): ?InsurancePoliciesDeleteAgreementsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/agreements/insurance-policies/delete",
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
                return InsurancePoliciesDeleteAgreementsResponse::fromJson($json);
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
