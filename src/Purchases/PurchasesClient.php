<?php

namespace Nordlet\Purchases;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Purchases\Requests\InvoicesCreatePurchasesRequest;
use Nordlet\Purchases\Types\InvoicesCreatePurchasesResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Purchases\Requests\InvoicesGetPurchasesRequest;
use Nordlet\Purchases\Types\InvoicesGetPurchasesResponse;
use Nordlet\Purchases\Requests\InvoicesUpdatePurchasesRequest;
use Nordlet\Purchases\Types\InvoicesUpdatePurchasesResponse;
use Nordlet\Purchases\Requests\InvoicesDeletePurchasesRequest;
use Nordlet\Purchases\Types\InvoicesDeletePurchasesResponse;
use Nordlet\Purchases\Requests\InvoicesRegisterPurchasesRequest;
use Nordlet\Purchases\Types\InvoicesRegisterPurchasesResponse;
use Nordlet\Purchases\Requests\DeferralsListPurchasesRequest;
use Nordlet\Purchases\Types\DeferralsListPurchasesResponse;
use Nordlet\Purchases\Requests\DeferralsPostPurchasesRequest;
use Nordlet\Purchases\Types\DeferralsPostPurchasesResponse;
use Nordlet\Purchases\Requests\InvoicesListPurchasesRequest;
use Nordlet\Purchases\Types\InvoicesListPurchasesResponse;
use Nordlet\Purchases\Requests\OrdersCreatePurchasesRequest;
use Nordlet\Purchases\Types\OrdersCreatePurchasesResponse;
use Nordlet\Purchases\Requests\OrdersUpdatePurchasesRequest;
use Nordlet\Purchases\Types\OrdersUpdatePurchasesResponse;
use Nordlet\Purchases\Requests\OrdersGetPurchasesRequest;
use Nordlet\Purchases\Types\OrdersGetPurchasesResponse;
use Nordlet\Purchases\Requests\OrdersListPurchasesRequest;
use Nordlet\Purchases\Types\OrdersListPurchasesResponse;
use Nordlet\Purchases\Requests\OrdersSubmitPurchasesRequest;
use Nordlet\Purchases\Types\OrdersSubmitPurchasesResponse;
use Nordlet\Purchases\Requests\OrdersApprovePurchasesRequest;
use Nordlet\Purchases\Types\OrdersApprovePurchasesResponse;
use Nordlet\Purchases\Requests\OrdersRejectPurchasesRequest;
use Nordlet\Purchases\Types\OrdersRejectPurchasesResponse;
use Nordlet\Purchases\Requests\OrdersCancelPurchasesRequest;
use Nordlet\Purchases\Types\OrdersCancelPurchasesResponse;
use Nordlet\Purchases\Requests\OrdersClosePurchasesRequest;
use Nordlet\Purchases\Types\OrdersClosePurchasesResponse;
use Nordlet\Purchases\Requests\OrdersDeletePurchasesRequest;
use Nordlet\Purchases\Types\OrdersDeletePurchasesResponse;
use Nordlet\Purchases\Requests\ReceiptsCreatePurchasesRequest;
use Nordlet\Purchases\Types\ReceiptsCreatePurchasesResponse;
use Nordlet\Purchases\Requests\ReceiptsGetPurchasesRequest;
use Nordlet\Purchases\Types\ReceiptsGetPurchasesResponse;
use Nordlet\Purchases\Requests\ReceiptsListPurchasesRequest;
use Nordlet\Purchases\Types\ReceiptsListPurchasesResponse;
use Nordlet\Purchases\Requests\InvoicesMatchPurchasesRequest;
use Nordlet\Purchases\Types\InvoicesMatchPurchasesResponse;

class PurchasesClient
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
     * Create a draft purchase invoice or credit note (`type`) from a supplier document; it is posted with `purchases/invoices/register`. Lines without a unit price take the item's supplier or purchase price, `currency` defaults to the company's invoice currency, `documentRef` links an uploaded file, and the gross total leaves out self-assessed VAT. `creditedInvoiceId` (credit notes only) must be an invoice of the same partner, `purchaseOrderId` an order of the same partner that is not draft, submitted or cancelled, and `operationTypeId` an active purchase operation type, each 422 otherwise; the same `documentNumber` for the same partner is refused with 409.
     *
     * @param InvoicesCreatePurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesCreatePurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesCreate(InvoicesCreatePurchasesRequest $request, ?array $options = null): ?InvoicesCreatePurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/invoices/create",
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
                return InvoicesCreatePurchasesResponse::fromJson($json);
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
     * Return one purchase invoice or credit note with its lines.
     *
     * @param InvoicesGetPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesGetPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesGet(InvoicesGetPurchasesRequest $request, ?array $options = null): ?InvoicesGetPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/invoices/get",
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
                return InvoicesGetPurchasesResponse::fromJson($json);
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
     * Change a draft purchase invoice (409 once registered); only the fields sent are changed, and `lines` replace all existing lines with the totals recomputed. `purchaseOrderId` and `operationTypeId` are checked as on `purchases/invoices/create` (422). A `documentNumber` already used for the partner is refused with 409.
     *
     * @param InvoicesUpdatePurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesUpdatePurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesUpdate(InvoicesUpdatePurchasesRequest $request, ?array $options = null): ?InvoicesUpdatePurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/invoices/update",
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
                return InvoicesUpdatePurchasesResponse::fromJson($json);
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
     * Mark a draft purchase invoice as deleted (409 once registered). A document capture linked to it goes back to `extracted` (or `pending` when it has no extraction) and can be confirmed again.
     *
     * @param InvoicesDeletePurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesDeletePurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesDelete(InvoicesDeletePurchasesRequest $request, ?array $options = null): ?InvoicesDeletePurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/invoices/delete",
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
                return InvoicesDeletePurchasesResponse::fromJson($json);
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
     * Register a draft purchase invoice or credit note: posts the journal entry dated `registrationDate` (default the document date) and sets the status to `registered`. The entry debits each line's expense account (the line's `accountCode`, else the item's purchase or expense account, else the operation type's expense account, else the `purchases.goodsForResale` or `purchases.defaultExpense` rule account), debits VAT receivable (a company that is not a VAT payer books the VAT into the expense instead), credits payables (the operation type's credit account when set) and credits output VAT for self-assessed VAT; a credit note posts the reverse. Lines with `deferralStartDate` and `deferralEndDate` are debited to the `purchases.prepaidExpenses` account instead and get a monthly release schedule for `purchases/deferrals/post`. With `warehouseId` the product lines of an invoice are received into stock at their base-currency cost (422 on an order-linked invoice, whose goods arrive through `purchases/receipts/create`, and for a line that is also deferred); `returnFromStock` on a credit note that credits an invoice takes the goods back out of stock at their FIFO cost and books the difference to the credited amount on the `inventory.cogs` account (422 on an invoice, without `creditedInvoiceId`, or when no goods of the credited invoice are in stock). A credit note that credits a registered invoice in the same currency is applied to it as a payment up to the open amount. Refused with 409 when already registered or the accounting period is locked, and with 422 when the credit notes would exceed the credited invoice, a posting account is missing or no exchange rate exists for the date. Emits `purchase_invoice.registered`, `purchase_invoice.paid` when the credited invoice becomes fully paid, and `stock.changed` when stock moves.
     *
     * @param InvoicesRegisterPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesRegisterPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesRegister(InvoicesRegisterPurchasesRequest $request, ?array $options = null): ?InvoicesRegisterPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/invoices/register",
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
                return InvoicesRegisterPurchasesResponse::fromJson($json);
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
     * List the monthly release rows that `purchases/invoices/register` creates for lines booked as prepaid expenses, each with its amount, expense and prepaid account and `status` (`pending`, `posted`, `cancelled`). Filterable by `invoiceId`, `status` and `scheduleDate`; sortable by `scheduleDate`.
     *
     * @param DeferralsListPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DeferralsListPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function deferralsList(DeferralsListPurchasesRequest $request = new DeferralsListPurchasesRequest(), ?array $options = null): ?DeferralsListPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/deferrals/list",
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
                return DeferralsListPurchasesResponse::fromJson($json);
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
     * Post every `pending` prepaid-expense release row dated on or before `asOfDate` (default today in the company's time zone): one journal entry per schedule date debiting the expense account and crediting the prepaid account, and the rows become `posted`. A locked accounting period is refused with 409. The scheduled job `expense-deferrals` runs the same release for every active company.
     *
     * @param DeferralsPostPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DeferralsPostPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function deferralsPost(DeferralsPostPurchasesRequest $request = new DeferralsPostPurchasesRequest(), ?array $options = null): ?DeferralsPostPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/deferrals/post",
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
                return DeferralsPostPurchasesResponse::fromJson($json);
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
     * List purchase invoices and credit notes without lines, with the supplier's `partnerName`. Filterable by `partnerId`, `type`, `status`, `paymentStatus`, `documentNumber`, `documentDate`, `currency`, `operationTypeId`, `purchaseOrderId`, `grossTotal`, `netTotal`, `vatTotal` and `dueDate`; sortable by `createdAt`, `documentDate`, `documentNumber`, `grossTotal` and `dueDate`.
     *
     * @param InvoicesListPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesListPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesList(InvoicesListPurchasesRequest $request = new InvoicesListPurchasesRequest(), ?array $options = null): ?InvoicesListPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/invoices/list",
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
                return InvoicesListPurchasesResponse::fromJson($json);
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
     * Create a draft purchase order for a supplier. Lines without a unit price take the item's supplier or purchase price; `orderNumber` comes from the `purchase_order` series with prefix PO when not given; `currency` defaults to the company's invoice currency; `documentRef` links an uploaded file to the order. A number already in use is refused with 409. The order continues with `purchases/orders/submit`, `purchases/orders/approve` and `purchases/receipts/create`.
     *
     * @param OrdersCreatePurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersCreatePurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersCreate(OrdersCreatePurchasesRequest $request, ?array $options = null): ?OrdersCreatePurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/create",
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
                return OrdersCreatePurchasesResponse::fromJson($json);
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
     * Change a draft purchase order (409 once it is submitted); only the fields sent are changed. `lines` replace all existing lines and the totals are recomputed.
     *
     * @param OrdersUpdatePurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersUpdatePurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersUpdate(OrdersUpdatePurchasesRequest $request, ?array $options = null): ?OrdersUpdatePurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/update",
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
                return OrdersUpdatePurchasesResponse::fromJson($json);
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
     * Return one purchase order with its lines; each line carries `receivedQty` and `remainingQty`.
     *
     * @param OrdersGetPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersGetPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersGet(OrdersGetPurchasesRequest $request, ?array $options = null): ?OrdersGetPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/get",
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
                return OrdersGetPurchasesResponse::fromJson($json);
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
     * List purchase orders without lines, with the supplier's `partnerName`. Filterable by `partnerId`, `status`, `orderNumber`, `orderDate`, `currency` and `grossTotal`; sortable by `createdAt`, `orderDate`, `orderNumber` and `grossTotal`.
     *
     * @param OrdersListPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersListPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersList(OrdersListPurchasesRequest $request = new OrdersListPurchasesRequest(), ?array $options = null): ?OrdersListPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/list",
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
                return OrdersListPurchasesResponse::fromJson($json);
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
     * Move a `draft` purchase order to `submitted` for approval (409 from any other status). `reason` is kept in the audit log.
     *
     * @param OrdersSubmitPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersSubmitPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersSubmit(OrdersSubmitPurchasesRequest $request, ?array $options = null): ?OrdersSubmitPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/submit",
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
                return OrdersSubmitPurchasesResponse::fromJson($json);
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
     * Approve a `submitted` purchase order (409 from any other status), recording who approved it and when; needs the `purchases:approve` scope. Goods are then received with `purchases/receipts/create`. Emits `purchase_order.approved`.
     *
     * @param OrdersApprovePurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersApprovePurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersApprove(OrdersApprovePurchasesRequest $request, ?array $options = null): ?OrdersApprovePurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/approve",
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
                return OrdersApprovePurchasesResponse::fromJson($json);
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
     * Send a `submitted` purchase order back to `draft` (409 from any other status); needs the `purchases:approve` scope. `reason` is kept in the audit log.
     *
     * @param OrdersRejectPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersRejectPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersReject(OrdersRejectPurchasesRequest $request, ?array $options = null): ?OrdersRejectPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/reject",
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
                return OrdersRejectPurchasesResponse::fromJson($json);
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
     * Cancel a `draft`, `submitted` or `approved` purchase order (409 from any other status, or when the order already has a goods receipt).
     *
     * @param OrdersCancelPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersCancelPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersCancel(OrdersCancelPurchasesRequest $request, ?array $options = null): ?OrdersCancelPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/cancel",
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
                return OrdersCancelPurchasesResponse::fromJson($json);
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
     * Close an `approved`, `partially_received` or `received` purchase order (409 from any other status); a closed order accepts no further goods receipts.
     *
     * @param OrdersClosePurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersClosePurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersClose(OrdersClosePurchasesRequest $request, ?array $options = null): ?OrdersClosePurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/close",
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
                return OrdersClosePurchasesResponse::fromJson($json);
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
     * Mark a `draft` purchase order as deleted (409 once it is submitted).
     *
     * @param OrdersDeletePurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?OrdersDeletePurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ordersDelete(OrdersDeletePurchasesRequest $request, ?array $options = null): ?OrdersDeletePurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/orders/delete",
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
                return OrdersDeletePurchasesResponse::fromJson($json);
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
     * Record a goods receipt against an `approved` or `partially_received` purchase order (409 otherwise), numbered from the `goods_receipt` series with prefix GR. Lines whose item is a product go into stock in `warehouseId`, else the order's warehouse (422 when neither is set), at their share of the order line's net amount converted at the receipt date's rate; `lotNumber` and `expiryDate` receive them into a lot, and an item that needs lot or serial tracking is refused with 422 without one. A quantity above the line's remaining quantity is refused with 409; the order becomes `received` when every line is fully received, else `partially_received`. Emits `goods_receipt.posted`, `stock.changed` and, when fully received, `purchase_order.received`.
     *
     * @param ReceiptsCreatePurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ReceiptsCreatePurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function receiptsCreate(ReceiptsCreatePurchasesRequest $request, ?array $options = null): ?ReceiptsCreatePurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/receipts/create",
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
                return ReceiptsCreatePurchasesResponse::fromJson($json);
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
     * Return one goods receipt with its lines and their stock movement ids.
     *
     * @param ReceiptsGetPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ReceiptsGetPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function receiptsGet(ReceiptsGetPurchasesRequest $request, ?array $options = null): ?ReceiptsGetPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/receipts/get",
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
                return ReceiptsGetPurchasesResponse::fromJson($json);
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
     * List goods receipts without lines. Filterable by `orderId`, `warehouseId`, `receiptDate` and `receiptNumber`; sortable by `createdAt` and `receiptDate`.
     *
     * @param ReceiptsListPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ReceiptsListPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function receiptsList(ReceiptsListPurchasesRequest $request = new ReceiptsListPurchasesRequest(), ?array $options = null): ?ReceiptsListPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/receipts/list",
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
                return ReceiptsListPurchasesResponse::fromJson($json);
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
     * Compare a purchase invoice with its linked purchase order and the goods received so far, grouped by item (by description for lines without one). Each row is `matched`, `not_received` (invoiced but nothing received), `over_invoiced` (invoiced more than received), `price_mismatch` (unit price differs by more than `priceTolerancePercent`), `not_on_order` or `not_invoiced`; `status` is `mismatched` when any row other than `not_invoiced` is not matched. Refused with 422 when the invoice has no `purchaseOrderId` or its currency differs from the order's. Nothing is changed.
     *
     * @param InvoicesMatchPurchasesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesMatchPurchasesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesMatch(InvoicesMatchPurchasesRequest $request, ?array $options = null): ?InvoicesMatchPurchasesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/purchases/invoices/match",
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
                return InvoicesMatchPurchasesResponse::fromJson($json);
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
