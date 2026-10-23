<?php

namespace Nordlet\Bank;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Bank\Requests\AccountsCreateBankRequest;
use Nordlet\Bank\Types\AccountsCreateBankResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Bank\Requests\AccountsListBankRequest;
use Nordlet\Bank\Types\AccountsListBankResponse;
use Nordlet\Bank\Requests\AccountsUpdateBankRequest;
use Nordlet\Bank\Types\AccountsUpdateBankResponse;
use Nordlet\Bank\Requests\TransactionsImportBankRequest;
use Nordlet\Bank\Types\TransactionsImportBankResponse;
use Nordlet\Bank\Requests\StatementsImportBankRequest;
use Nordlet\Bank\Types\StatementsImportBankResponse;
use Nordlet\Bank\Requests\TransactionsListBankRequest;
use Nordlet\Bank\Types\TransactionsListBankResponse;
use Nordlet\Bank\Requests\TransactionsMatchBankRequest;
use Nordlet\Bank\Types\TransactionsMatchBankResponse;
use Nordlet\Bank\Requests\TransactionsMatchManyBankRequest;
use Nordlet\Bank\Types\TransactionsMatchManyBankResponse;
use Nordlet\Bank\Requests\TransactionsUnmatchBankRequest;
use Nordlet\Bank\Types\TransactionsUnmatchBankResponse;
use Nordlet\Bank\Requests\TransactionsRecordBankRequest;
use Nordlet\Bank\Types\TransactionsRecordBankResponse;
use Nordlet\Bank\Requests\PaymentsExportBankRequest;
use Nordlet\Bank\Types\PaymentsExportBankResponse;
use Nordlet\Bank\Requests\ImportTemplatesCreateBankRequest;
use Nordlet\Bank\Types\ImportTemplatesCreateBankResponse;
use Nordlet\Bank\Requests\ImportTemplatesUpdateBankRequest;
use Nordlet\Bank\Types\ImportTemplatesUpdateBankResponse;
use Nordlet\Bank\Requests\ImportTemplatesDeleteBankRequest;
use Nordlet\Bank\Types\ImportTemplatesDeleteBankResponse;
use Nordlet\Bank\Requests\ImportTemplatesGetBankRequest;
use Nordlet\Bank\Types\ImportTemplatesGetBankResponse;
use Nordlet\Bank\Requests\ImportTemplatesListBuiltinBankRequest;
use Nordlet\Bank\Types\ImportTemplatesListBuiltinBankResponse;
use Nordlet\Bank\Requests\ImportTemplatesListBankRequest;
use Nordlet\Bank\Types\ImportTemplatesListBankResponse;
use Nordlet\Bank\Requests\MatchRulesCreateBankRequest;
use Nordlet\Bank\Types\MatchRulesCreateBankResponse;
use Nordlet\Bank\Requests\MatchRulesUpdateBankRequest;
use Nordlet\Bank\Types\MatchRulesUpdateBankResponse;
use Nordlet\Bank\Requests\MatchRulesDeleteBankRequest;
use Nordlet\Bank\Types\MatchRulesDeleteBankResponse;
use Nordlet\Bank\Requests\MatchRulesListBankRequest;
use Nordlet\Bank\Types\MatchRulesListBankResponse;
use Nordlet\Bank\Requests\MandatesCreateBankRequest;
use Nordlet\Bank\Types\MandatesCreateBankResponse;
use Nordlet\Bank\Requests\MandatesUpdateBankRequest;
use Nordlet\Bank\Types\MandatesUpdateBankResponse;
use Nordlet\Bank\Requests\MandatesCancelBankRequest;
use Nordlet\Bank\Types\MandatesCancelBankResponse;
use Nordlet\Bank\Requests\MandatesGetBankRequest;
use Nordlet\Bank\Types\MandatesGetBankResponse;
use Nordlet\Bank\Requests\MandatesListBankRequest;
use Nordlet\Bank\Types\MandatesListBankResponse;
use Nordlet\Bank\Requests\DirectDebitsCandidatesBankRequest;
use Nordlet\Bank\Types\DirectDebitsCandidatesBankResponse;
use Nordlet\Bank\Requests\DirectDebitsExportBankRequest;
use Nordlet\Bank\Types\DirectDebitsExportBankResponse;
use Nordlet\Bank\Requests\TransactionsSuggestMatchesBankRequest;
use Nordlet\Bank\Types\TransactionsSuggestMatchesBankResponse;
use Nordlet\Bank\Requests\SettlementsImportBankRequest;
use Nordlet\Bank\Types\SettlementsImportBankResponse;
use Nordlet\Bank\Requests\SettlementsListBankRequest;
use Nordlet\Bank\Types\SettlementsListBankResponse;
use Nordlet\Bank\Requests\SettlementsGetBankRequest;
use Nordlet\Bank\Types\SettlementsGetBankResponse;
use Nordlet\Bank\Requests\SettlementsMatchBankRequest;
use Nordlet\Bank\Types\SettlementsMatchBankResponse;
use Nordlet\Bank\Requests\SettlementsCommissionBankRequest;
use Nordlet\Bank\Types\SettlementsCommissionBankResponse;
use Nordlet\Bank\Requests\SettlementsLinkBankRequest;
use Nordlet\Bank\Types\SettlementsLinkBankResponse;
use Nordlet\Bank\Requests\SettlementsUnlinkBankRequest;
use Nordlet\Bank\Types\SettlementsUnlinkBankResponse;
use Nordlet\Bank\Requests\SettlementsPostBankRequest;
use Nordlet\Bank\Types\SettlementsPostBankResponse;
use Nordlet\Bank\Requests\SecuritiesImportBankRequest;
use Nordlet\Bank\Types\SecuritiesImportBankResponse;
use Nordlet\Bank\Requests\SecuritiesListBankRequest;
use Nordlet\Bank\Types\SecuritiesListBankResponse;
use Nordlet\Bank\Requests\SecuritiesGetBankRequest;
use Nordlet\Bank\Types\SecuritiesGetBankResponse;
use Nordlet\Bank\Requests\SecuritiesOperationsListBankRequest;
use Nordlet\Bank\Types\SecuritiesOperationsListBankResponse;
use Nordlet\Bank\Requests\FeedsBanksListBankRequest;
use Nordlet\Bank\Types\FeedsBanksListBankResponse;
use Nordlet\Bank\Requests\FeedsConnectionsStartBankRequest;
use Nordlet\Bank\Types\FeedsConnectionsStartBankResponse;
use Nordlet\Bank\Requests\FeedsConnectionsCompleteBankRequest;
use Nordlet\Bank\Types\FeedsConnectionsCompleteBankResponse;
use Nordlet\Bank\Requests\FeedsConnectionsGetBankRequest;
use Nordlet\Bank\Types\FeedsConnectionsGetBankResponse;
use Nordlet\Bank\Requests\FeedsConnectionsListBankRequest;
use Nordlet\Bank\Types\FeedsConnectionsListBankResponse;
use Nordlet\Bank\Requests\FeedsConnectionsDeleteBankRequest;
use Nordlet\Bank\Types\FeedsConnectionsDeleteBankResponse;
use Nordlet\Bank\Requests\FeedsAccountsLinkBankRequest;
use Nordlet\Bank\Types\FeedsAccountsLinkBankResponse;
use Nordlet\Bank\Requests\FeedsAccountsConfigureBankRequest;
use Nordlet\Bank\Types\FeedsAccountsConfigureBankResponse;
use Nordlet\Bank\Requests\FeedsSyncBankRequest;
use Nordlet\Bank\Types\FeedsSyncBankResponse;

class BankClient
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
     * Create a bank, Stripe or broker account. `currency` defaults to the company base currency and `accountCode` to the default bank account of the chart of accounts. A `documentRef` also creates a bank agreement with that document attached. A Stripe account with an `iban` is refused with 422; an account with the same IBAN already existing answers 409.
     *
     * @param AccountsCreateBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountsCreateBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountsCreate(AccountsCreateBankRequest $request, ?array $options = null): ?AccountsCreateBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/accounts/create",
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
                return AccountsCreateBankResponse::fromJson($json);
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
     * List the bank accounts of the company. Filterable by name, type, iban and isActive; sortable by name and createdAt.
     *
     * @param AccountsListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountsListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountsList(AccountsListBankRequest $request = new AccountsListBankRequest(), ?array $options = null): ?AccountsListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/accounts/list",
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
                return AccountsListBankResponse::fromJson($json);
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
     * Change the name, type, IBAN, ledger account code or active flag of a bank account. Setting type to stripe clears the IBAN, and sending an `iban` together with it is refused with 422.
     *
     * @param AccountsUpdateBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AccountsUpdateBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function accountsUpdate(AccountsUpdateBankRequest $request, ?array $options = null): ?AccountsUpdateBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/accounts/update",
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
                return AccountsUpdateBankResponse::fromJson($json);
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
     * Insert statement lines (up to 1000 per call) into a bank account as new transactions. A line without `currency` takes the account currency; a line in another currency is refused with 422. A line whose `externalId` is already on the account is skipped and counted in `skipped`. An incoming line that an active match rule (`bank/match-rules/create`) recognises is linked to its settlement batch.
     *
     * @param TransactionsImportBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TransactionsImportBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function transactionsImport(TransactionsImportBankRequest $request, ?array $options = null): ?TransactionsImportBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/transactions/import",
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
                return TransactionsImportBankResponse::fromJson($json);
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
     * Import a statement file into a bank account: camt.053 XML, MT940, a Stripe balance CSV or a Revolut Business CSV, chosen by `format` or by the type of `templateId` (an iso20022 template also takes MT940 content). Statements whose IBAN or currency differ from the account are left out; the call is refused with 422 when none remains, when a line is in another currency, when the file lacks the columns or elements the template requires or when it holds more than 50000 lines. Lines already on the account are skipped, and Stripe movements already posted through a settlement payout are skipped with a warning. With a template, the mapped fields are posted to their ledger accounts, partners are created, payments are matched to the invoices they reference, and invoices, credit notes or advance invoices are issued where the template asks for them (`invoiceMetaField`, `advanceInvoices`); `transfersCsv` posts the lender payouts and commissions of a Stripe template. Invoices issued this way are announced as `sale_invoice.issued`.
     *
     * @param StatementsImportBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?StatementsImportBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function statementsImport(StatementsImportBankRequest $request, ?array $options = null): ?StatementsImportBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/statements/import",
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
                return StatementsImportBankResponse::fromJson($json);
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
     * List the bank transactions of the company. Filterable by id, bankAccountId, status, matchedDocumentId, date, amount, counterpartyIban, counterpartyName and externalId; sortable by date, createdAt and amount.
     *
     * @param TransactionsListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TransactionsListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function transactionsList(TransactionsListBankRequest $request = new TransactionsListBankRequest(), ?array $options = null): ?TransactionsListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/transactions/list",
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
                return TransactionsListBankResponse::fromJson($json);
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
     * Match one new bank transaction to a document: an issued sale invoice or advance for incoming money; an issued sale credit note, a registered purchase invoice or an approved payroll run (company currency only) for outgoing money. Posts the payment journal transaction between the bank account and the receivable, payable or net payable account, with any exchange difference on the gain or loss account, raises the paid amount of the document and sets the line to matched. `invoiceAmount` states the amount settled on an invoice in another currency; in the same currency it must equal the payment (422). Answers 409 when the line is already matched, when the amount exceeds the remaining balance of the document or when the accounting period of the line date is locked. A document that becomes fully paid is announced as `sale_invoice.paid` or `purchase_invoice.paid`.
     *
     * @param TransactionsMatchBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TransactionsMatchBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function transactionsMatch(TransactionsMatchBankRequest $request, ?array $options = null): ?TransactionsMatchBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/transactions/match",
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
                return TransactionsMatchBankResponse::fromJson($json);
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
     * The documents are issued sale invoices or advances for incoming money; issued sale credit notes, registered purchase invoices or approved payroll runs for outgoing money. Each must be in the currency of the payment, each allocation must be above zero, a document may appear once and the allocations must add up to the payment (422 otherwise). One journal transaction carries the bank entry, one entry per document and any exchange difference; the line is matched as an `invoice_allocation`. Answers 409 when the line is already matched, when an allocation exceeds the remaining balance of its document or when the accounting period of the line date is locked. Each document that becomes fully paid is announced as `sale_invoice.paid` or `purchase_invoice.paid`.
     *
     * @param TransactionsMatchManyBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TransactionsMatchManyBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function transactionsMatchMany(TransactionsMatchManyBankRequest $request, ?array $options = null): ?TransactionsMatchManyBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/transactions/match-many",
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
                return TransactionsMatchManyBankResponse::fromJson($json);
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
     * Undo a match. A payment matched to an invoice, or a line posted by an import template, gets a reversing journal transaction dated date (default: today) and the invoice paid amount and payment status are restored; a line linked to a payment-provider settlement is only unlinked. The line returns to status new.
     *
     * @param TransactionsUnmatchBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TransactionsUnmatchBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function transactionsUnmatch(TransactionsUnmatchBankRequest $request, ?array $options = null): ?TransactionsUnmatchBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/transactions/unmatch",
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
                return TransactionsUnmatchBankResponse::fromJson($json);
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
     * Record a payment that is on no imported statement: inserts a bank transaction on the account dated `date` (positive for a sale invoice, negative for a purchase invoice or payroll run, in the account currency) and matches it to the document with the checks, posting and `sale_invoice.paid` or `purchase_invoice.paid` event of `bank/transactions/match`.
     *
     * @param TransactionsRecordBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TransactionsRecordBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function transactionsRecord(TransactionsRecordBankRequest $request, ?array $options = null): ?TransactionsRecordBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/transactions/record",
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
                return TransactionsRecordBankResponse::fromJson($json);
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
     * Build a SEPA credit transfer file (pain.001.001.03) that pays the remaining amount of each registered purchase invoice from the bank account on `executionDate` (default: today), to the partner's default bank account. The bank account needs an IBAN and every invoice must be in EUR and have a partner bank account on file (422 otherwise, see `partners/bank-accounts/create`); an invoice that is already paid answers 409. The file is returned as `xml`; nothing is posted or marked paid.
     *
     * @param PaymentsExportBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PaymentsExportBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function paymentsExport(PaymentsExportBankRequest $request, ?array $options = null): ?PaymentsExportBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/payments/export",
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
                return PaymentsExportBankResponse::fromJson($json);
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
     * A template of type stripe, iso20022, revolut or bank_connection names the fields of the file or feed: a field with an `accountCode` is posted to that ledger account on import, a field with `createPartner` creates the customer, supplier or fee partner. `invoiceMetaField` is the Stripe metadata key (stripe) or the reference field (other types) by which payments are linked to invoices; with it `invoiceVatRatePercent`, `invoiceItemId` and, outside Stripe, `advanceInvoices` apply. `companyMetaField`, `lenderMetaField`, the operation types and the refund labels are for Stripe templates only. A template with the same name already existing answers 409.
     *
     * @param ImportTemplatesCreateBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ImportTemplatesCreateBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function importTemplatesCreate(ImportTemplatesCreateBankRequest $request, ?array $options = null): ?ImportTemplatesCreateBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/import-templates/create",
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
                return ImportTemplatesCreateBankResponse::fromJson($json);
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
     * Change a company import template under the rules of `bank/import-templates/create`; a change of `type` re-checks the existing fields against the new type. Built-in templates cannot be changed. A name already used by another template answers 409.
     *
     * @param ImportTemplatesUpdateBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ImportTemplatesUpdateBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function importTemplatesUpdate(ImportTemplatesUpdateBankRequest $request, ?array $options = null): ?ImportTemplatesUpdateBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/import-templates/update",
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
                return ImportTemplatesUpdateBankResponse::fromJson($json);
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
     * Delete a company import template. Built-in templates cannot be deleted.
     *
     * @param ImportTemplatesDeleteBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ImportTemplatesDeleteBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function importTemplatesDelete(ImportTemplatesDeleteBankRequest $request, ?array $options = null): ?ImportTemplatesDeleteBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/import-templates/delete",
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
                return ImportTemplatesDeleteBankResponse::fromJson($json);
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
     * Read one import template, a company one or a built-in one.
     *
     * @param ImportTemplatesGetBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ImportTemplatesGetBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function importTemplatesGet(ImportTemplatesGetBankRequest $request, ?array $options = null): ?ImportTemplatesGetBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/import-templates/get",
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
                return ImportTemplatesGetBankResponse::fromJson($json);
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
     * Today the Revolut Business template: the Revolut CSV fields, with fees, card payments and top-ups posted to the accounts of the posting rules, the sender and beneficiary names creating partners and the Reference column linking payments to invoices. The rows carry `builtin: true`, are readable with `bank/import-templates/get` and are not in `bank/import-templates/list`.
     *
     * @param ImportTemplatesListBuiltinBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ImportTemplatesListBuiltinBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function importTemplatesListBuiltin(ImportTemplatesListBuiltinBankRequest $request = new ImportTemplatesListBuiltinBankRequest(), ?array $options = null): ?ImportTemplatesListBuiltinBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/import-templates/list-builtin",
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
                return ImportTemplatesListBuiltinBankResponse::fromJson($json);
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
     * List the import templates of the company (the built-in ones are under `bank/import-templates/list-builtin`). Filterable by name and type; sortable by name and createdAt.
     *
     * @param ImportTemplatesListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ImportTemplatesListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function importTemplatesList(ImportTemplatesListBankRequest $request = new ImportTemplatesListBankRequest(), ?array $options = null): ?ImportTemplatesListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/import-templates/list",
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
                return ImportTemplatesListBankResponse::fromJson($json);
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
     * Create a rule that links incoming bank lines to the settlement batches of a payment provider when lines are imported and when a batch is posted. A line whose description, counterparty name or external id contains `pattern` (case-insensitive) is linked to the open batch of `provider` whose payout id follows `payoutIdPrefix` in the line text or, without a prefix, to the single open batch on the same bank account with the same currency and net amount and a payout date within `dateWindowDays` of the line date. `bankAccountId` limits the rule to one account.
     *
     * @param MatchRulesCreateBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MatchRulesCreateBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function matchRulesCreate(MatchRulesCreateBankRequest $request, ?array $options = null): ?MatchRulesCreateBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/match-rules/create",
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
                return MatchRulesCreateBankResponse::fromJson($json);
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
     * Change a match rule; `payoutIdPrefix` and `bankAccountId` are cleared with null.
     *
     * @param MatchRulesUpdateBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MatchRulesUpdateBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function matchRulesUpdate(MatchRulesUpdateBankRequest $request, ?array $options = null): ?MatchRulesUpdateBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/match-rules/update",
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
                return MatchRulesUpdateBankResponse::fromJson($json);
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
     * Delete a match rule.
     *
     * @param MatchRulesDeleteBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MatchRulesDeleteBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function matchRulesDelete(MatchRulesDeleteBankRequest $request, ?array $options = null): ?MatchRulesDeleteBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/match-rules/delete",
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
                return MatchRulesDeleteBankResponse::fromJson($json);
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
     * List the match rules of the company, ordered by name.
     *
     * @param MatchRulesListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MatchRulesListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function matchRulesList(MatchRulesListBankRequest $request = new MatchRulesListBankRequest(), ?array $options = null): ?MatchRulesListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/match-rules/list",
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
                return MatchRulesListBankResponse::fromJson($json);
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
     * Record a SEPA direct debit mandate a partner has signed: debtor IBAN and BIC, scheme (CORE or B2B), recurrent or one-off, and the signature date. `reference` is the mandate reference written into the collection files; without one `MNDT-` followed by a generated id is used. `debtorName` defaults to the partner name. A reference already in use answers 409.
     *
     * @param MandatesCreateBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MandatesCreateBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function mandatesCreate(MandatesCreateBankRequest $request, ?array $options = null): ?MandatesCreateBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/mandates/create",
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
                return MandatesCreateBankResponse::fromJson($json);
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
     * Change the BIC, debtor name or notes of a mandate.
     *
     * @param MandatesUpdateBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MandatesUpdateBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function mandatesUpdate(MandatesUpdateBankRequest $request, ?array $options = null): ?MandatesUpdateBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/mandates/update",
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
                return MandatesUpdateBankResponse::fromJson($json);
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
     * Cancel an active mandate. A mandate that is already cancelled or completed answers 409.
     *
     * @param MandatesCancelBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MandatesCancelBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function mandatesCancel(MandatesCancelBankRequest $request, ?array $options = null): ?MandatesCancelBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/mandates/cancel",
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
                return MandatesCancelBankResponse::fromJson($json);
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
     * Read one mandate. `expiresOn` is 36 months after the last collection, or after the signature date when nothing has been collected.
     *
     * @param MandatesGetBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MandatesGetBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function mandatesGet(MandatesGetBankRequest $request, ?array $options = null): ?MandatesGetBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/mandates/get",
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
                return MandatesGetBankResponse::fromJson($json);
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
     * List the mandates of the company. Filterable by partnerId, status, scheme, reference and iban; sortable by createdAt and signatureDate.
     *
     * @param MandatesListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MandatesListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function mandatesList(MandatesListBankRequest $request = new MandatesListBankRequest(), ?array $options = null): ?MandatesListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/mandates/list",
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
                return MandatesListBankResponse::fromJson($json);
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
     * List the issued EUR sale invoices that are unpaid or partly paid and whose partner holds an active mandate, each with the mandate `bank/direct-debits/export` would use (the most recently signed active one). Filterable by partnerId, fullNumber, issueDate and dueDate; sortable by issueDate, dueDate, fullNumber, grossTotal and createdAt.
     *
     * @param DirectDebitsCandidatesBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DirectDebitsCandidatesBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function directDebitsCandidates(DirectDebitsCandidatesBankRequest $request = new DirectDebitsCandidatesBankRequest(), ?array $options = null): ?DirectDebitsCandidatesBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/direct-debits/candidates",
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
                return DirectDebitsCandidatesBankResponse::fromJson($json);
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
     * Build a SEPA direct debit file (pain.008.001.02) that collects the remaining amount of each issued EUR sale invoice into the bank account on `collectionDate` (default: today) under the partner's most recently signed active mandate. The bank account needs an IBAN and the company a valid `sepaCreditorId` (422, see `account/companies/update`); an invoice whose partner has no active mandate, or whose mandate expired (36 months without a collection), answers 422; an invoice already paid, or a one-off mandate asked to collect more than one invoice, answers 409. The sequence type is OOFF for a one-off mandate, FRST for the first collection under a recurrent one and RCUR after that. On success the collection count and last collection date of each mandate are advanced and a one-off mandate is completed; nothing is posted.
     *
     * @param DirectDebitsExportBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DirectDebitsExportBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function directDebitsExport(DirectDebitsExportBankRequest $request, ?array $options = null): ?DirectDebitsExportBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/direct-debits/export",
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
                return DirectDebitsExportBankResponse::fromJson($json);
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
     * Suggest documents for a new bank transaction: issued sale invoices and advances for incoming money; registered purchase invoices, issued sale credit notes and approved payroll runs for outgoing money. Candidates are unpaid documents whose remaining balance covers the payment (any balance when in another currency), scored by an equal remaining balance, the document number or payroll period in the payment description and a counterparty IBAN or name matching the partner or an employee on the run; the best `limit` come back with their reasons. A transaction that is already matched answers 409.
     *
     * @param TransactionsSuggestMatchesBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TransactionsSuggestMatchesBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function transactionsSuggestMatches(TransactionsSuggestMatchesBankRequest $request, ?array $options = null): ?TransactionsSuggestMatchesBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/transactions/suggest-matches",
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
                return TransactionsSuggestMatchesBankResponse::fromJson($json);
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
     * Import a Stripe payout report into settlement batches, one per payout: the itemized payout reconciliation CSV (`format` payout_reconciliation) or the unified payments export with its Transfer column (unified_payments); another CSV is refused with 422. Rows without a payout, the payout rows themselves and unsettled payments are skipped and counted. Each line is matched to an issued sale invoice through the references the report carries (the external reference of a sales order or an invoice number) or through a charge matched earlier. A payout already imported receives its new lines while the batch is in status imported and is skipped once posted; a payout mixing currencies answers 422. Emits `settlement.imported` for a new batch and `settlement.updated` for one that received lines.
     *
     * @param SettlementsImportBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettlementsImportBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settlementsImport(SettlementsImportBankRequest $request, ?array $options = null): ?SettlementsImportBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/settlements/import",
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
                return SettlementsImportBankResponse::fromJson($json);
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
     * List the settlement batches with their line counts and the clearing figures against the bank lines. Filterable by provider, payoutId, status, currency and bankAccountId; sortable by payoutDate, createdAt and netTotal.
     *
     * @param SettlementsListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettlementsListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settlementsList(SettlementsListBankRequest $request = new SettlementsListBankRequest(), ?array $options = null): ?SettlementsListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/settlements/list",
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
                return SettlementsListBankResponse::fromJson($json);
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
     * Read one settlement batch with its lines, each with the invoice it is matched to and the bank line that cleared it (`clearingBooked`, `clearingDifference`, `clearingUnposted`).
     *
     * @param SettlementsGetBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettlementsGetBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settlementsGet(SettlementsGetBankRequest $request, ?array $options = null): ?SettlementsGetBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/settlements/get",
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
                return SettlementsGetBankResponse::fromJson($json);
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
     * Match a settlement line to an issued sale invoice or advance by hand (`matchStatus` manual), or clear the match with `invoiceId` null. Only lines of the categories charge, refund, dispute, dispute_reversal and partial_capture_reversal can be matched (422), and only while the batch is in status imported (409).
     *
     * @param SettlementsMatchBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettlementsMatchBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settlementsMatch(SettlementsMatchBankRequest $request, ?array $options = null): ?SettlementsMatchBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/settlements/match",
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
                return SettlementsMatchBankResponse::fromJson($json);
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
     * A line with its own rate or amount is split with that value when the batch is posted. A line without one falls back to the commissionPercent given to the posting call, and without that the amount goes to the suspense account. Send both fields as null to clear the line back to the fallback.
     *
     * @param SettlementsCommissionBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettlementsCommissionBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settlementsCommission(SettlementsCommissionBankRequest $request, ?array $options = null): ?SettlementsCommissionBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/settlements/commission",
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
                return SettlementsCommissionBankResponse::fromJson($json);
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
     * Attach the incoming bank-statement line that carries this payout to the settlement batch.
     *
     * @param SettlementsLinkBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettlementsLinkBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settlementsLink(SettlementsLinkBankRequest $request, ?array $options = null): ?SettlementsLinkBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/settlements/link",
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
                return SettlementsLinkBankResponse::fromJson($json);
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
     * Detach the bank-statement line from the settlement batch and return the line to unmatched.
     *
     * @param SettlementsUnlinkBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettlementsUnlinkBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settlementsUnlink(SettlementsUnlinkBankRequest $request, ?array $options = null): ?SettlementsUnlinkBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/settlements/unlink",
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
                return SettlementsUnlinkBankResponse::fromJson($json);
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
     * Post a settlement batch dated `date` (default: the payout date, else today): the bank account receives the net payout, the matched sale invoices are settled against the receivable (the receivable of each partner in a journal transaction of its own when invoices of several partners are settled), the provider fees, the marketplace commission and the seller payable are booked, and a payout in another currency is converted at the rate of that date with the exchange difference against each invoice's own rate on the gain or loss account. A line without a matched invoice is split by its own rate or amount, else by `commissionPercent`, else parked on the suspense account; a line already imported as a movement of a bank account is posted against that account instead. Answers 409 when the batch is already posted or the period is locked, 422 when it has no lines. The payout is linked to the bank line a match rule recognises. Emits `settlement.posted`, `sale_invoice.paid` for each invoice that becomes paid and `refund_liability.actual` for refunds of invoices carrying a refund liability.
     *
     * @param SettlementsPostBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SettlementsPostBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function settlementsPost(SettlementsPostBankRequest $request, ?array $options = null): ?SettlementsPostBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/settlements/post",
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
                return SettlementsPostBankResponse::fromJson($json);
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
     * Import an Interactive Brokers activity statement (CSV) into a bank account of type `broker`; refused with 422 for another account type, a file that is not an IBKR statement, a statement of a different IBKR account than the bank account already holds, or a trade older than the latest trade already imported (statements go in in date order). Rows already imported are skipped. Dividends, withholding tax, interest and fees are posted against the broker account; stock, option and futures trades are matched FIFO against the open lots and post the cost to `securities.investments` and the realised result to `securities.gain` or `securities.loss` (posting rules), one journal entry per date in the base currency at the rate of the day (422 without a rate, 409 when the date's period is locked). Deposits, corporate actions and currency conversions are stored as `not_posted` with a note.
     *
     * @param SecuritiesImportBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SecuritiesImportBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function securitiesImport(SecuritiesImportBankRequest $request, ?array $options = null): ?SecuritiesImportBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/securities/import",
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
                return SecuritiesImportBankResponse::fromJson($json);
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
     * List the securities imports, newest first; filterable by `bankAccountId` and `brokerAccount`, sortable by `createdAt` and `realizedTotal`.
     *
     * @param SecuritiesListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SecuritiesListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function securitiesList(SecuritiesListBankRequest $request = new SecuritiesListBankRequest(), ?array $options = null): ?SecuritiesListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/securities/list",
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
                return SecuritiesListBankResponse::fromJson($json);
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
     * Return one securities import with its operations in date order, each with its posting status, its amounts in the base currency and the journal transaction it was posted in.
     *
     * @param SecuritiesGetBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SecuritiesGetBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function securitiesGet(SecuritiesGetBankRequest $request, ?array $options = null): ?SecuritiesGetBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/securities/get",
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
                return SecuritiesGetBankResponse::fromJson($json);
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
     * List the imported securities operations, newest first; filterable by `bankAccountId`, `kind`, `status`, `symbol` and `date`, sortable by `date` and `createdAt`.
     *
     * @param SecuritiesOperationsListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SecuritiesOperationsListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function securitiesOperationsList(SecuritiesOperationsListBankRequest $request = new SecuritiesOperationsListBankRequest(), ?array $options = null): ?SecuritiesOperationsListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/securities/operations/list",
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
                return SecuritiesOperationsListBankResponse::fromJson($json);
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
     * Read from the bank-feed provider configured on the API server or in platform settings (Enable Banking or an HTTP bridge, named in `provider`), for one `country` or all. Without a provider the call answers 503.
     *
     * @param FeedsBanksListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FeedsBanksListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function feedsBanksList(FeedsBanksListBankRequest $request = new FeedsBanksListBankRequest(), ?array $options = null): ?FeedsBanksListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/feeds/banks/list",
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
                return FeedsBanksListBankResponse::fromJson($json);
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
     * Creates a pending bank connection and asks the provider for the authorization page of the bank. `url` is where the user authorizes access for `validForDays` (default 90); `reference` is the state the bank sends back and what `bank/feeds/connections/complete` takes. `redirectUrl` falls back to the one in platform settings, and the call is refused with 422 when neither is set.
     *
     * @param FeedsConnectionsStartBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FeedsConnectionsStartBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function feedsConnectionsStart(FeedsConnectionsStartBankRequest $request, ?array $options = null): ?FeedsConnectionsStartBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/feeds/connections/start",
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
                return FeedsConnectionsStartBankResponse::fromJson($json);
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
     * Exchanges `code` for a provider session, sets the connection to active with the consent expiry the bank reports, and records every account of the session as a bank-feed account, not yet linked to a ledger account (`bank/feeds/accounts/link`). A connection that is already active answers 409. When the provider refuses the code the connection goes to status error with the message in `error`.
     *
     * @param FeedsConnectionsCompleteBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FeedsConnectionsCompleteBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function feedsConnectionsComplete(FeedsConnectionsCompleteBankRequest $request, ?array $options = null): ?FeedsConnectionsCompleteBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/feeds/connections/complete",
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
                return FeedsConnectionsCompleteBankResponse::fromJson($json);
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
     * Read one bank connection with its bank-feed accounts.
     *
     * @param FeedsConnectionsGetBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FeedsConnectionsGetBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function feedsConnectionsGet(FeedsConnectionsGetBankRequest $request, ?array $options = null): ?FeedsConnectionsGetBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/feeds/connections/get",
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
                return FeedsConnectionsGetBankResponse::fromJson($json);
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
     * List the bank connections of the company, without their accounts. Filterable by status, provider and aspspCountry; sortable by createdAt and lastSyncedAt.
     *
     * @param FeedsConnectionsListBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FeedsConnectionsListBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function feedsConnectionsList(FeedsConnectionsListBankRequest $request = new FeedsConnectionsListBankRequest(), ?array $options = null): ?FeedsConnectionsListBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/feeds/connections/list",
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
                return FeedsConnectionsListBankResponse::fromJson($json);
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
     * Closes the provider session when the connection has one and a provider is configured (a failure at the bank does not stop the call), then deletes the connection and its bank-feed accounts. The ledger bank accounts and the transactions already imported stay.
     *
     * @param FeedsConnectionsDeleteBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FeedsConnectionsDeleteBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function feedsConnectionsDelete(FeedsConnectionsDeleteBankRequest $request, ?array $options = null): ?FeedsConnectionsDeleteBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/feeds/connections/delete",
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
                return FeedsConnectionsDeleteBankResponse::fromJson($json);
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
     * Give exactly one of `bankAccountId` (an existing ledger bank account) or `createBankAccount` (a new one with the IBAN and currency of the feed account; `accountCode` defaults to the default bank account of the chart of accounts). `syncFrom` is the date the first sync starts from; without it the first sync covers the last 90 days.
     *
     * @param FeedsAccountsLinkBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FeedsAccountsLinkBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function feedsAccountsLink(FeedsAccountsLinkBankRequest $request, ?array $options = null): ?FeedsAccountsLinkBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/feeds/accounts/link",
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
                return FeedsAccountsLinkBankResponse::fromJson($json);
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
     * `importTemplateId` must be a template of type bank_connection, or null to apply none. `syncSchedule` is manual, daily, weekly or monthly; every account whose schedule is not manual is synced by Nordlet when it is due. At least one of the two must be given.
     *
     * @param FeedsAccountsConfigureBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FeedsAccountsConfigureBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function feedsAccountsConfigure(FeedsAccountsConfigureBankRequest $request, ?array $options = null): ?FeedsAccountsConfigureBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/feeds/accounts/configure",
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
                return FeedsAccountsConfigureBankResponse::fromJson($json);
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
     * Fetches the transactions of every linked bank-feed account of the connection, or of `feedAccountId` alone, from `dateFrom` (default: seven days before the last sync, else the `syncFrom` of the account, else 90 days back) to `dateTo`, and inserts the new ones into the linked ledger bank account; lines already there count as `skipped`. An import template set on the account is applied as in `bank/statements/import`. Answers 409 when the connection is not active or has no session, and when the bank returns more than 20 pages for the range (keep `dateFrom` and set an earlier `dateTo`). A provider failure is written to the `error` of the connection, and one that is not retryable sets its status to error. The outcome is announced as `bank_feed.synced`, and invoices the template issues as `sale_invoice.issued`.
     *
     * @param FeedsSyncBankRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?FeedsSyncBankResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function feedsSync(FeedsSyncBankRequest $request, ?array $options = null): ?FeedsSyncBankResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/bank/feeds/sync",
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
                return FeedsSyncBankResponse::fromJson($json);
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
