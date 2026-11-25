<?php

namespace Nordlet\Ledger;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Ledger\Requests\AccountsListLedgerRequest;
use Nordlet\Ledger\Types\AccountsListLedgerResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Ledger\Requests\AccountsCreateLedgerRequest;
use Nordlet\Ledger\Types\AccountsCreateLedgerResponse;
use Nordlet\Ledger\Requests\AccountsUpdateLedgerRequest;
use Nordlet\Ledger\Types\AccountsUpdateLedgerResponse;
use Nordlet\Ledger\Requests\AccountsApplyTemplateLedgerRequest;
use Nordlet\Ledger\Types\AccountsApplyTemplateLedgerResponse;
use Nordlet\Ledger\Requests\AccountsSwitchChartLedgerRequest;
use Nordlet\Ledger\Types\AccountsSwitchChartLedgerResponse;
use Nordlet\Ledger\Requests\PeriodsListLedgerRequest;
use Nordlet\Ledger\Types\PeriodsListLedgerResponse;
use Nordlet\Ledger\Requests\PeriodsLockLedgerRequest;
use Nordlet\Ledger\Types\PeriodsLockLedgerResponse;
use Nordlet\Ledger\Requests\PeriodsUnlockLedgerRequest;
use Nordlet\Ledger\Types\PeriodsUnlockLedgerResponse;
use Nordlet\Ledger\Requests\JournalTransactionsListLedgerRequest;
use Nordlet\Ledger\Types\JournalTransactionsListLedgerResponse;
use Nordlet\Ledger\Requests\CostCentersCreateLedgerRequest;
use Nordlet\Ledger\Types\CostCentersCreateLedgerResponse;
use Nordlet\Ledger\Requests\CostCentersUpdateLedgerRequest;
use Nordlet\Ledger\Types\CostCentersUpdateLedgerResponse;
use Nordlet\Ledger\Requests\CostCentersListLedgerRequest;
use Nordlet\Ledger\Types\CostCentersListLedgerResponse;
use Nordlet\Ledger\Requests\CostCenterGroupsCreateLedgerRequest;
use Nordlet\Ledger\Types\CostCenterGroupsCreateLedgerResponse;
use Nordlet\Ledger\Requests\CostCenterGroupsUpdateLedgerRequest;
use Nordlet\Ledger\Types\CostCenterGroupsUpdateLedgerResponse;
use Nordlet\Ledger\Requests\CostCenterGroupsDeleteLedgerRequest;
use Nordlet\Ledger\Types\CostCenterGroupsDeleteLedgerResponse;
use Nordlet\Ledger\Requests\CostCenterGroupsListLedgerRequest;
use Nordlet\Ledger\Types\CostCenterGroupsListLedgerResponse;
use Nordlet\Ledger\Requests\PostingRulesListLedgerRequest;
use Nordlet\Ledger\Types\PostingRulesListLedgerResponse;
use Nordlet\Ledger\Requests\PostingRulesUpdateLedgerRequest;
use Nordlet\Ledger\Types\PostingRulesUpdateLedgerResponse;
use Nordlet\Ledger\Requests\OwnersCreateLedgerRequest;
use Nordlet\Ledger\Types\OwnersCreateLedgerResponse;
use Nordlet\Ledger\Requests\OwnersUpdateLedgerRequest;
use Nordlet\Ledger\Types\OwnersUpdateLedgerResponse;
use Nordlet\Ledger\Requests\OwnersDeleteLedgerRequest;
use Nordlet\Ledger\Types\OwnersDeleteLedgerResponse;
use Nordlet\Ledger\Requests\OwnersListLedgerRequest;
use Nordlet\Ledger\Types\OwnersListLedgerResponse;
use Nordlet\Ledger\Requests\JournalTransactionsGetLedgerRequest;
use Nordlet\Ledger\Types\JournalTransactionsGetLedgerResponse;
use Nordlet\Ledger\Requests\JournalTransactionsCreateLedgerRequest;
use Nordlet\Ledger\Types\JournalTransactionsCreateLedgerResponse;
use Nordlet\Ledger\Requests\JournalTemplatesCreateLedgerRequest;
use Nordlet\Ledger\Types\JournalTemplatesCreateLedgerResponse;
use Nordlet\Ledger\Requests\JournalTemplatesListLedgerRequest;
use Nordlet\Ledger\Types\JournalTemplatesListLedgerResponse;
use Nordlet\Ledger\Requests\JournalTemplatesDeleteLedgerRequest;
use Nordlet\Ledger\Types\JournalTemplatesDeleteLedgerResponse;
use Nordlet\Ledger\Requests\JournalTemplatesPostLedgerRequest;
use Nordlet\Ledger\Types\JournalTemplatesPostLedgerResponse;
use Nordlet\Ledger\Requests\JournalTransactionsReverseLedgerRequest;
use Nordlet\Ledger\Types\JournalTransactionsReverseLedgerResponse;
use Nordlet\Ledger\Requests\FxRevaluationRunLedgerRequest;
use Nordlet\Ledger\Types\FxRevaluationRunLedgerResponse;
use Nordlet\Ledger\Requests\FxRevaluationReverseLedgerRequest;
use Nordlet\Ledger\Types\FxRevaluationReverseLedgerResponse;
use Nordlet\Ledger\Requests\AccrualsCreateLedgerRequest;
use Nordlet\Ledger\Types\AccrualsCreateLedgerResponse;
use Nordlet\Ledger\Requests\TaxProvisionPostLedgerRequest;
use Nordlet\Ledger\Types\TaxProvisionPostLedgerResponse;
use Nordlet\Ledger\Requests\StatementRowsSchemesLedgerRequest;
use Nordlet\Ledger\Types\StatementRowsSchemesLedgerResponse;
use Nordlet\Ledger\Requests\StatementRowsListLedgerRequest;
use Nordlet\Ledger\Types\StatementRowsListLedgerResponse;
use Nordlet\Ledger\Requests\StatementRowsSetLedgerRequest;
use Nordlet\Ledger\Types\StatementRowsSetLedgerResponse;

class LedgerClient
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
     * Lists the company's chart of accounts. Filterable by `code`, `name`, `type` and `isPostable`; sortable by `code`, `name`, `type` and `isPostable`. A `name` filter with `contains` matches the stored name and the name shown in the language of the request (`displayName`).
     *
     * @param AccountsListLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountsListLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountsList(AccountsListLedgerRequest $request = new AccountsListLedgerRequest(), ?array $options = null): ?AccountsListLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/accounts/list",
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
                return AccountsListLedgerResponse::fromJson($json);
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
     * Adds an account to the company's chart of accounts. `parentId` must name an account of the same company. Answers 409 when an account with the same `code` already exists.
     *
     * @param AccountsCreateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountsCreateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountsCreate(AccountsCreateLedgerRequest $request, ?array $options = null): ?AccountsCreateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/accounts/create",
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
                return AccountsCreateLedgerResponse::fromJson($json);
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
     * Changes the name, parent or postability of an account; the code and type cannot be changed. An account cannot be its own parent.
     *
     * @param AccountsUpdateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountsUpdateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountsUpdate(AccountsUpdateLedgerRequest $request, ?array $options = null): ?AccountsUpdateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/accounts/update",
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
                return AccountsUpdateLedgerResponse::fromJson($json);
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
     * Adds the accounts of the company's chart template that the chart does not have yet (an account whose code already exists is not replaced) and sets the parent links the template defines. Returns the number of accounts in the chart afterwards.
     *
     * @param AccountsApplyTemplateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountsApplyTemplateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountsApplyTemplate(AccountsApplyTemplateLedgerRequest $request = new AccountsApplyTemplateLedgerRequest(), ?array $options = null): ?AccountsApplyTemplateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/accounts/apply-template",
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
                return AccountsApplyTemplateLedgerResponse::fromJson($json);
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
     * Replaces the seeded chart with the chart template of the company country (the national chart for a company registered in Belgium, the Czech Republic, Denmark, Estonia, France, Luxembourg, the Netherlands, Portugal, Romania, Slovakia, Slovenia, Spain, the United Kingdom or the United States, the chart of the balance sheet and profit and loss items of Directive 2013/34/EU for a company registered in Austria, Bulgaria, Croatia, Cyprus, Finland, Germany, Greece, Hungary, Iceland, Ireland, Italy, Latvia, Liechtenstein, Malta, Norway, Poland or Sweden, the Lithuanian standard chart otherwise) and switches the posting defaults with it. Answers 409 when the company already uses that chart, has journal entries, holds accounts created by hand, or has settings that name an account the new chart does not have.
     *
     * @param AccountsSwitchChartLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountsSwitchChartLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountsSwitchChart(AccountsSwitchChartLedgerRequest $request = new AccountsSwitchChartLedgerRequest(), ?array $options = null): ?AccountsSwitchChartLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/accounts/switch-chart",
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
                return AccountsSwitchChartLedgerResponse::fromJson($json);
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
     * Lists the company's accounting periods with their `open` or `locked` status. Filterable by `year`, `month` and `status`; sortable by `year` and `month`.
     *
     * @param PeriodsListLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PeriodsListLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function periodsList(PeriodsListLedgerRequest $request = new PeriodsListLedgerRequest(), ?array $options = null): ?PeriodsListLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/periods/list",
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
                return PeriodsListLedgerResponse::fromJson($json);
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
     * Locks the month so that postings dated in it are refused with 409 (`ledger/journal/transactions/create`, `cash/orders/create` and `cash/expense-reports/create` among them). Before locking a month that is not locked yet, posts the pending ratable revenue recognition tranches scheduled up to the month end and emits `revenue_recognition.posted` when there were any; when the month is the company's fiscal year end and no year-end close is posted for that year, posts the year-end close that moves the income and expense balances of the fiscal year to the retained earnings account (posting rule `closing.retainedEarnings`). The lock is not refused for open items: `warnings` lists them as `reports/period-checklist` does, for the month, or for the fiscal year when the month is the fiscal year end.
     *
     * @param PeriodsLockLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PeriodsLockLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function periodsLock(PeriodsLockLedgerRequest $request, ?array $options = null): ?PeriodsLockLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/periods/lock",
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
                return PeriodsLockLedgerResponse::fromJson($json);
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
     * Opens the month for posting again. When the month is the company's fiscal year end and a year-end close is posted for it, posts a reversal of that close dated the same day.
     *
     * @param PeriodsUnlockLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PeriodsUnlockLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function periodsUnlock(PeriodsUnlockLedgerRequest $request, ?array $options = null): ?PeriodsUnlockLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/periods/unlock",
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
                return PeriodsUnlockLedgerResponse::fromJson($json);
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
     * Lists journal transactions with the partner name. Filterable by `date`, `status`, `documentType`, `partnerId` and `documentId`; sortable by `date`, `createdAt`, `description`, `partnerName` (the name of the partner), `documentType` and `status`.
     *
     * @param JournalTransactionsListLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?JournalTransactionsListLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function journalTransactionsList(JournalTransactionsListLedgerRequest $request = new JournalTransactionsListLedgerRequest(), ?array $options = null): ?JournalTransactionsListLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/journal/transactions/list",
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
                return JournalTransactionsListLedgerResponse::fromJson($json);
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
     * Creates a cost center, optionally inside a cost center group. Answers 409 when the `code` is already used.
     *
     * @param CostCentersCreateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CostCentersCreateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function costCentersCreate(CostCentersCreateLedgerRequest $request, ?array $options = null): ?CostCentersCreateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/cost-centers/create",
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
                return CostCentersCreateLedgerResponse::fromJson($json);
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
     * Changes the name, group or active flag of a cost center. An inactive cost center is refused on new manual journal entries (`ledger/journal/transactions/create` answers 422).
     *
     * @param CostCentersUpdateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CostCentersUpdateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function costCentersUpdate(CostCentersUpdateLedgerRequest $request, ?array $options = null): ?CostCentersUpdateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/cost-centers/update",
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
                return CostCentersUpdateLedgerResponse::fromJson($json);
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
     * Lists cost centers with their group name. Filterable by `code`, `name`, `isActive` and `groupId`; sortable by `code`, `name` and `createdAt`.
     *
     * @param CostCentersListLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CostCentersListLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function costCentersList(CostCentersListLedgerRequest $request = new CostCentersListLedgerRequest(), ?array $options = null): ?CostCentersListLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/cost-centers/list",
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
                return CostCentersListLedgerResponse::fromJson($json);
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
     * Creates a cost center group. Answers 409 when the `code` is already used.
     *
     * @param CostCenterGroupsCreateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CostCenterGroupsCreateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function costCenterGroupsCreate(CostCenterGroupsCreateLedgerRequest $request, ?array $options = null): ?CostCenterGroupsCreateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/cost-center-groups/create",
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
                return CostCenterGroupsCreateLedgerResponse::fromJson($json);
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
     * Changes the code or name of a cost center group. Answers 409 when the new code is already used.
     *
     * @param CostCenterGroupsUpdateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CostCenterGroupsUpdateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function costCenterGroupsUpdate(CostCenterGroupsUpdateLedgerRequest $request, ?array $options = null): ?CostCenterGroupsUpdateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/cost-center-groups/update",
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
                return CostCenterGroupsUpdateLedgerResponse::fromJson($json);
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
     * Deletes a cost center group. Answers 409 while cost centers are still assigned to it.
     *
     * @param CostCenterGroupsDeleteLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CostCenterGroupsDeleteLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function costCenterGroupsDelete(CostCenterGroupsDeleteLedgerRequest $request, ?array $options = null): ?CostCenterGroupsDeleteLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/cost-center-groups/delete",
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
                return CostCenterGroupsDeleteLedgerResponse::fromJson($json);
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
     * Lists cost center groups. Filterable and sortable by `code` and `name`.
     *
     * @param CostCenterGroupsListLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CostCenterGroupsListLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function costCenterGroupsList(CostCenterGroupsListLedgerRequest $request = new CostCenterGroupsListLedgerRequest(), ?array $options = null): ?CostCenterGroupsListLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/cost-center-groups/list",
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
                return CostCenterGroupsListLedgerResponse::fromJson($json);
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
     * Lists every posting rule with its default account code on the company's chart template, the account code in effect and whether the company has overridden it.
     *
     * @param PostingRulesListLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostingRulesListLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postingRulesList(PostingRulesListLedgerRequest $request = new PostingRulesListLedgerRequest(), ?array $options = null): ?PostingRulesListLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/posting-rules/list",
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
                return PostingRulesListLedgerResponse::fromJson($json);
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
     * Overrides the account code of one or more posting rules; an `accountCode` of null removes the override and the chart default applies again. Every code given must be a postable account of the company's chart, else 422.
     *
     * @param PostingRulesUpdateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PostingRulesUpdateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function postingRulesUpdate(PostingRulesUpdateLedgerRequest $request, ?array $options = null): ?PostingRulesUpdateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/posting-rules/update",
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
                return PostingRulesUpdateLedgerResponse::fromJson($json);
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
     * Adds an owner of the company. `equityAccountCode` defaults to the share capital account of the company's chart; a code that is not in the chart of accounts answers 422.
     *
     * @param OwnersCreateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OwnersCreateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ownersCreate(OwnersCreateLedgerRequest $request, ?array $options = null): ?OwnersCreateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/owners/create",
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
                return OwnersCreateLedgerResponse::fromJson($json);
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
     * Changes the fields of an owner. An `equityAccountCode` that is not in the chart of accounts answers 422.
     *
     * @param OwnersUpdateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OwnersUpdateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ownersUpdate(OwnersUpdateLedgerRequest $request, ?array $options = null): ?OwnersUpdateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/owners/update",
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
                return OwnersUpdateLedgerResponse::fromJson($json);
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
     * Deletes an owner.
     *
     * @param OwnersDeleteLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OwnersDeleteLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ownersDelete(OwnersDeleteLedgerRequest $request, ?array $options = null): ?OwnersDeleteLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/owners/delete",
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
                return OwnersDeleteLedgerResponse::fromJson($json);
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
     * Lists the company's owners. Filterable by `name` and `code`; sortable by `name`, `createdAt`, `code`, `sharesQuantity`, `sharesAmount`, `sharesType`, `sharesAcquisitionDate`, `partnerLiability` and `withholdingTaxPercent`.
     *
     * @param OwnersListLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OwnersListLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ownersList(OwnersListLedgerRequest $request = new OwnersListLedgerRequest(), ?array $options = null): ?OwnersListLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/owners/list",
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
                return OwnersListLedgerResponse::fromJson($json);
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
     * Returns a journal transaction with its entries, ordered by account code. `reversedByTransactionId` is the transaction posted by `ledger/journal/transactions/reverse` for a manual transaction, else null.
     *
     * @param JournalTransactionsGetLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?JournalTransactionsGetLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function journalTransactionsGet(JournalTransactionsGetLedgerRequest $request, ?array $options = null): ?JournalTransactionsGetLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/journal/transactions/get",
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
                return JournalTransactionsGetLedgerResponse::fromJson($json);
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
     * Posts a manual journal transaction (`documentType` `manual`, status `posted`) in the company's base currency. Every `accountCode` must be a postable account of the chart, cost centers must exist and be active, projects must exist, an entry `partnerId` must be a partner of the company (422), and the debits must equal the credits. An entry with a `partnerId` on the receivable or payable account (posting rules `sales.receivable`, `purchases.payables`) is counted by `reports/partner-balances` and `reports/debt-aging`. Answers 422 for an unknown or non-postable account, an unknown cost center or project, debits that differ from the credits, an amount that is not whole cents (a third or fourth decimal other than zero; `10.5000` is accepted), for a `currency` other than the base currency and for an inactive cost center, and 409 when the accounting period of `date` is locked.
     *
     * @param JournalTransactionsCreateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?JournalTransactionsCreateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function journalTransactionsCreate(JournalTransactionsCreateLedgerRequest $request, ?array $options = null): ?JournalTransactionsCreateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/journal/transactions/create",
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
                return JournalTransactionsCreateLedgerResponse::fromJson($json);
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
     * Save a journal template: the accounts of a recurring manual transaction, each with its side (`debit` or `credit`), for example the lines of a payslip from an outside payroll provider. `ledger/journal/templates/post` then posts it with the amounts of the month. The accounts, cost centers, projects and partners are checked as in `ledger/journal/transactions/create` (422); the template needs at least one debit and one credit line (422), and a repeated `name` is refused with 409.
     *
     * @param JournalTemplatesCreateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?JournalTemplatesCreateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function journalTemplatesCreate(JournalTemplatesCreateLedgerRequest $request, ?array $options = null): ?JournalTemplatesCreateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/journal/templates/create",
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
                return JournalTemplatesCreateLedgerResponse::fromJson($json);
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
     * Lists the journal templates with their lines. Filterable by `name`; sortable by `name` and `createdAt`.
     *
     * @param JournalTemplatesListLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?JournalTemplatesListLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function journalTemplatesList(JournalTemplatesListLedgerRequest $request = new JournalTemplatesListLedgerRequest(), ?array $options = null): ?JournalTemplatesListLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/journal/templates/list",
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
                return JournalTemplatesListLedgerResponse::fromJson($json);
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
     * Deletes a journal template. The transactions already posted from it stay. Answers 404 for an unknown template.
     *
     * @param JournalTemplatesDeleteLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?JournalTemplatesDeleteLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function journalTemplatesDelete(JournalTemplatesDeleteLedgerRequest $request, ?array $options = null): ?JournalTemplatesDeleteLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/journal/templates/delete",
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
                return JournalTemplatesDeleteLedgerResponse::fromJson($json);
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
     * Posts a manual journal transaction from a journal template: `amounts` gives one amount per template line, in the template's order, on the line's side; a line with amount 0 is left out. The transaction is posted as by `ledger/journal/transactions/create` (`documentType` `manual`, base currency) with `description`, else the template name. Answers 404 for an unknown template and 422 when the number of amounts differs from the number of lines, when fewer than two lines have an amount or when the debits differ from the credits, besides the answers of `ledger/journal/transactions/create`.
     *
     * @param JournalTemplatesPostLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?JournalTemplatesPostLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function journalTemplatesPost(JournalTemplatesPostLedgerRequest $request, ?array $options = null): ?JournalTemplatesPostLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/journal/templates/post",
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
                return JournalTemplatesPostLedgerResponse::fromJson($json);
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
     * Posts a journal transaction (`documentType` `manual_reversal`, `documentId` the original) dated `date` (default the original date) whose entries mirror the original's (debits and credits swapped). Only a `manual` transaction, a `tax_provision` (posted by `ledger/tax-provision/post`), a `vat_prorata_adjustment` (posted by `declarations/vat-prorata/adjustment/post`) or an `it_tfr_accrual` or `it_tfr_revaluation` (posted by `declarations/it/tfr/accrual/post` and `declarations/it/tfr/revaluation/post`) is reversed here; a transaction posted by a document is reversed through that document. Answers 409 when the transaction is neither, when it is already reversed and when the accounting period of `date` is locked, and 400 when `date` is before the original date.
     *
     * @param JournalTransactionsReverseLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?JournalTransactionsReverseLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function journalTransactionsReverse(JournalTransactionsReverseLedgerRequest $request, ?array $options = null): ?JournalTransactionsReverseLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/journal/transactions/reverse",
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
                return JournalTransactionsReverseLedgerResponse::fromJson($json);
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
     * Revalues the open sale and purchase documents in a currency other than the base currency (open amount at `date`, payments up to `date` deducted) and the balances of the foreign-currency bank accounts at the stored exchange rate of `date` against the rate of each document or the booked base balance, and posts one journal transaction dated `date` (`documentType` `fx_revaluation`): the difference on each receivable or payable account with the partner on the entry, and the unrealised gain or loss on the `bank.fxUnrealisedGain` and `bank.fxUnrealisedLoss` posting rule accounts. A second transaction (`documentType` `fx_revaluation_reversal`) reverses it on the next calendar day. Nothing is posted and `runId` is null when nothing differs. The payment match keeps booking the realised difference against the rate of the document. Runs only on request, once per `date`: 409 when `date` is already revalued (reverse that run first) and when `date` or the next day is in a locked accounting period; 422 when a stored rate is missing.
     *
     * @param FxRevaluationRunLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FxRevaluationRunLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function fxRevaluationRun(FxRevaluationRunLedgerRequest $request, ?array $options = null): ?FxRevaluationRunLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/fx-revaluation/run",
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
                return FxRevaluationRunLedgerResponse::fromJson($json);
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
     * Cancels the run `id` of `ledger/fx-revaluation/run`: posts a mirror of the revaluation transaction on the run date (`documentType` `fx_revaluation_undo`) and a mirror of its next-day reversal on the reversal date (`documentType` `fx_revaluation_undo_reversal`), so the net effect is zero, and frees the date for a new run. Answers 404 for an unknown run, 409 when the run is already reversed or when the run date or the next day is in a locked accounting period.
     *
     * @param FxRevaluationReverseLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FxRevaluationReverseLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function fxRevaluationReverse(FxRevaluationReverseLedgerRequest $request, ?array $options = null): ?FxRevaluationReverseLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/fx-revaluation/reverse",
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
                return FxRevaluationReverseLedgerResponse::fromJson($json);
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
     * Posts a journal transaction (`documentType` `accrual`) dated `date` from `lines` (each line either a debit or a credit, whole cents, balanced; an optional `partnerId` is counted by the partner reports on the receivable and payable accounts) and a mirror transaction (`documentType` `accrual_reversal`, `documentId` the accrual) dated the first day of the next month. 422 for an unknown or non-postable account, an unknown partner, an unbalanced or one-sided line; 409 when the accounting period of `date` or of the reversal date is locked.
     *
     * @param AccrualsCreateLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccrualsCreateLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accrualsCreate(AccrualsCreateLedgerRequest $request, ?array $options = null): ?AccrualsCreateLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/accruals/create",
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
                return AccrualsCreateLedgerResponse::fromJson($json);
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
     * Posts a journal transaction (`documentType` `tax_provision`, `documentId` the fiscal year) dated the last day of the fiscal year `fiscalYear`: debit the `tax.corporateExpense` posting rule account, credit `tax.corporatePayable`. `amount` defaults to the tax payable of the year's corporate tax return for Lithuanian (PLN204) and Romanian (D101) companies; for other countries it is required (422). 422 when the amount is zero or not whole cents; 409 when the accounting period is locked and when the year already has a provision that is not reversed (reverse it with `ledger/journal/transactions/reverse`).
     *
     * @param TaxProvisionPostLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TaxProvisionPostLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function taxProvisionPost(TaxProvisionPostLedgerRequest $request, ?array $options = null): ?TaxProvisionPostLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/tax-provision/post",
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
                return TaxProvisionPostLedgerResponse::fromJson($json);
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
     * The rows or codes of each return or registry deposit of the company country that are filled from account balances. Accounts fall into a row by the layout defaults for the standard chart of accounts unless mapped with ledger/statement-rows/set.
     *
     * @param StatementRowsSchemesLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?StatementRowsSchemesLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function statementRowsSchemes(StatementRowsSchemesLedgerRequest $request = new StatementRowsSchemesLedgerRequest(), ?array $options = null): ?StatementRowsSchemesLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/statement-rows/schemes",
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
                return StatementRowsSchemesLedgerResponse::fromJson($json);
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
     * Every postable account of the company with the row of `scheme` it falls into, by a mapping (`ledger/statement-rows/set`) or by the layout default, and the amount it carries there: the balance up to `toDate` on a balance-sheet row, the movement from `fromDate` to `toDate` on an income-statement row. `toDate` defaults to today and `fromDate` to 1 January of that year. `rows` holds the row totals and `unmapped` the accounts with a balance but no row.
     *
     * @param StatementRowsListLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?StatementRowsListLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function statementRowsList(StatementRowsListLedgerRequest $request, ?array $options = null): ?StatementRowsListLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/statement-rows/list",
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
                return StatementRowsListLedgerResponse::fromJson($json);
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
     * A mapping on a code prefix covers every account whose code starts with it; the longest matching prefix wins. An empty rowCode removes the mapping so the layout default applies again.
     *
     * @param StatementRowsSetLedgerRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?StatementRowsSetLedgerResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function statementRowsSet(StatementRowsSetLedgerRequest $request, ?array $options = null): ?StatementRowsSetLedgerResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/ledger/statement-rows/set",
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
                return StatementRowsSetLedgerResponse::fromJson($json);
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
