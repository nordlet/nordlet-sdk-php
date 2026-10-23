<?php

namespace Nordlet\Sales;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Sales\Requests\InvoicesCreateSalesRequest;
use Nordlet\Sales\Types\InvoicesCreateSalesResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Sales\Requests\InvoicesGetSalesRequest;
use Nordlet\Sales\Types\InvoicesGetSalesResponse;
use Nordlet\Sales\Requests\InvoicesPdfSalesRequest;
use Nordlet\Sales\Types\InvoicesPdfSalesResponse;
use Nordlet\Sales\Requests\InvoicesSendSalesRequest;
use Nordlet\Sales\Types\InvoicesSendSalesResponse;
use Nordlet\Sales\Requests\InvoicesPeppolXmlSalesRequest;
use Nordlet\Sales\Types\InvoicesPeppolXmlSalesResponse;
use Nordlet\Sales\Requests\InvoicesPeppolSendSalesRequest;
use Nordlet\Sales\Types\InvoicesPeppolSendSalesResponse;
use Nordlet\Sales\Requests\InvoicesPeppolStatusSalesRequest;
use Nordlet\Sales\Types\InvoicesPeppolStatusSalesResponse;
use Nordlet\Sales\Requests\InvoicesEinvoiceXmlSalesRequest;
use Nordlet\Sales\Types\InvoicesEinvoiceXmlSalesResponse;
use Nordlet\Sales\Requests\InvoicesEinvoiceSendSalesRequest;
use Nordlet\Sales\Types\InvoicesEinvoiceSendSalesResponse;
use Nordlet\Sales\Requests\InvoicesEinvoiceStatusSalesRequest;
use Nordlet\Sales\Types\InvoicesEinvoiceStatusSalesResponse;
use Nordlet\Sales\Requests\InvoicesUpdateSalesRequest;
use Nordlet\Sales\Types\InvoicesUpdateSalesResponse;
use Nordlet\Sales\Requests\InvoicesDeleteSalesRequest;
use Nordlet\Sales\Types\InvoicesDeleteSalesResponse;
use Nordlet\Sales\Requests\InvoicesIssueSalesRequest;
use Nordlet\Sales\Types\InvoicesIssueSalesResponse;
use Nordlet\Sales\Requests\InvoicesLockSalesRequest;
use Nordlet\Sales\Types\InvoicesLockSalesResponse;
use Nordlet\Sales\Requests\InvoicesUnlockSalesRequest;
use Nordlet\Sales\Types\InvoicesUnlockSalesResponse;
use Nordlet\Sales\Requests\InvoicesPaymentLinkSalesRequest;
use Nordlet\Sales\Types\InvoicesPaymentLinkSalesResponse;
use Nordlet\Sales\Requests\InvoicesPaymentSettingsGetSalesRequest;
use Nordlet\Sales\Types\InvoicesPaymentSettingsGetSalesResponse;
use Nordlet\Sales\Requests\InvoicesPaymentSettingsUpdateSalesRequest;
use Nordlet\Sales\Types\InvoicesPaymentSettingsUpdateSalesResponse;
use Nordlet\Sales\Requests\RecognitionSchedulesListSalesRequest;
use Nordlet\Sales\Types\RecognitionSchedulesListSalesResponse;
use Nordlet\Sales\Requests\InvoicesApplyAdvanceSalesRequest;
use Nordlet\Sales\Types\InvoicesApplyAdvanceSalesResponse;
use Nordlet\Sales\Requests\InvoicesListSalesRequest;
use Nordlet\Sales\Types\InvoicesListSalesResponse;
use Nordlet\Sales\Requests\ActsCreateSalesRequest;
use Nordlet\Sales\Types\ActsCreateSalesResponse;
use Nordlet\Sales\Requests\ActsUpdateSalesRequest;
use Nordlet\Sales\Types\ActsUpdateSalesResponse;
use Nordlet\Sales\Requests\ActsIssueSalesRequest;
use Nordlet\Sales\Types\ActsIssueSalesResponse;
use Nordlet\Sales\Requests\ActsCancelSalesRequest;
use Nordlet\Sales\Types\ActsCancelSalesResponse;
use Nordlet\Sales\Requests\ActsGetSalesRequest;
use Nordlet\Sales\Types\ActsGetSalesResponse;
use Nordlet\Sales\Requests\ActsListSalesRequest;
use Nordlet\Sales\Types\ActsListSalesResponse;
use Nordlet\Sales\Requests\ActsPdfSalesRequest;
use Nordlet\Sales\Types\ActsPdfSalesResponse;
use Nordlet\Sales\Requests\InvoiceTemplatesCreateSalesRequest;
use Nordlet\Sales\Types\InvoiceTemplatesCreateSalesResponse;
use Nordlet\Sales\Requests\InvoiceTemplatesUpdateSalesRequest;
use Nordlet\Sales\Types\InvoiceTemplatesUpdateSalesResponse;
use Nordlet\Sales\Requests\InvoiceTemplatesGetSalesRequest;
use Nordlet\Sales\Types\InvoiceTemplatesGetSalesResponse;
use Nordlet\Sales\Requests\InvoiceTemplatesDeleteSalesRequest;
use Nordlet\Sales\Types\InvoiceTemplatesDeleteSalesResponse;
use Nordlet\Sales\Requests\InvoiceTemplatesListSalesRequest;
use Nordlet\Sales\Types\InvoiceTemplatesListSalesResponse;
use Nordlet\Sales\Requests\RecurringInvoicesCreateSalesRequest;
use Nordlet\Sales\Types\RecurringInvoicesCreateSalesResponse;
use Nordlet\Sales\Requests\RecurringInvoicesUpdateSalesRequest;
use Nordlet\Sales\Types\RecurringInvoicesUpdateSalesResponse;
use Nordlet\Sales\Requests\RecurringInvoicesGetSalesRequest;
use Nordlet\Sales\Types\RecurringInvoicesGetSalesResponse;
use Nordlet\Sales\Requests\RecurringInvoicesDeleteSalesRequest;
use Nordlet\Sales\Types\RecurringInvoicesDeleteSalesResponse;
use Nordlet\Sales\Requests\RecurringInvoicesGenerateSalesRequest;
use Nordlet\Sales\Types\RecurringInvoicesGenerateSalesResponse;
use Nordlet\Sales\Requests\RecurringInvoicesRunSalesRequest;
use Nordlet\Sales\Types\RecurringInvoicesRunSalesResponse;
use Nordlet\Sales\Requests\RecurringInvoicesListSalesRequest;
use Nordlet\Sales\Types\RecurringInvoicesListSalesResponse;
use Nordlet\Sales\Requests\RecognitionComputeSalesRequest;
use Nordlet\Sales\Types\RecognitionComputeSalesResponse;
use Nordlet\Sales\Requests\RecognitionRunSalesRequest;
use Nordlet\Sales\Types\RecognitionRunSalesResponse;
use Nordlet\Sales\Requests\RecognitionProgressSalesRequest;
use Nordlet\Sales\Types\RecognitionProgressSalesResponse;
use Nordlet\Sales\Requests\RecognitionModifySalesRequest;
use Nordlet\Sales\Types\RecognitionModifySalesResponse;
use Nordlet\Sales\Requests\RecognitionRunsListSalesRequest;
use Nordlet\Sales\Types\RecognitionRunsListSalesResponse;
use Nordlet\Sales\Requests\RecognitionSummarySalesRequest;
use Nordlet\Sales\Types\RecognitionSummarySalesResponse;
use Nordlet\Sales\Requests\RefundLiabilityListSalesRequest;
use Nordlet\Sales\Types\RefundLiabilityListSalesResponse;
use Nordlet\Sales\Requests\RefundLiabilityTrueUpSalesRequest;
use Nordlet\Sales\Types\RefundLiabilityTrueUpSalesResponse;

class SalesClient
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
     * Create a draft sale document - an invoice, credit note, proforma or advance invoice (`type`) - with its lines; the totals are computed from the lines and `discountPercent`, and the number is assigned by `sales/invoices/issue`. Answers 422 when a credit note credits a proforma, another credit note or a document that is not issued, when the credited document has another partner or currency, when an OSS or IOSS document has no EU `vatCountryCode`, when the lines carry VAT but the company is not a VAT payer or the VAT scheme charges none, or when the operation type or document series is for another document type.
     *
     * @param InvoicesCreateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesCreateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesCreate(InvoicesCreateSalesRequest $request, ?array $options = null): ?InvoicesCreateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/create",
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
                return InvoicesCreateSalesResponse::fromJson($json);
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
     * Return one sale document with its lines, its VAT evidence and, on an advance invoice, the gross amount already applied to final invoices.
     *
     * @param InvoicesGetSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesGetSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesGet(InvoicesGetSalesRequest $request, ?array $options = null): ?InvoicesGetSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/get",
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
                return InvoicesGetSalesResponse::fromJson($json);
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
     * Render a sale document, draft or issued, as a PDF returned base64-encoded. The document's own `locale` wins over the requested one. When the company has a payment link template and the document is issued and not paid, the PDF carries the payment link.
     *
     * @param InvoicesPdfSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesPdfSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesPdf(InvoicesPdfSalesRequest $request, ?array $options = null): ?InvoicesPdfSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/pdf",
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
                return InvoicesPdfSalesResponse::fromJson($json);
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
     * E-mail an issued sale document as a PDF attachment to `to`, else to the partner's e-mail address, and emit `sale_invoice.sent`. The PDF is the one of `sales/invoices/pdf`. Answers 422 when e-mail sending is not configured, when the document is not issued, or when neither `to` nor the partner's e-mail is set.
     *
     * @param InvoicesSendSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesSendSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesSend(InvoicesSendSalesRequest $request, ?array $options = null): ?InvoicesSendSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/send",
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
                return InvoicesSendSalesResponse::fromJson($json);
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
     * Render an issued invoice or credit note as a Peppol BIS Billing 3.0 UBL file, returned base64-encoded with the sender and receiver participant identifiers, without sending it; `sales/invoices/peppol-send` sends the same file. Answers 422 for a draft, a proforma or an advance invoice.
     *
     * @param InvoicesPeppolXmlSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesPeppolXmlSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesPeppolXml(InvoicesPeppolXmlSalesRequest $request, ?array $options = null): ?InvoicesPeppolXmlSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/peppol-xml",
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
                return InvoicesPeppolXmlSalesResponse::fromJson($json);
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
     * Send an issued invoice or credit note to the customer over Peppol through the company's own access point (Account → Compliance → EU; Nordlet supports Recommand, Storecove and e-invoice.be). Without one the call is refused with 422 and the document can only be downloaded with `sales/invoices/peppol-xml`. `status` is `pending` until the receiving access point confirms, then `delivered`; `failed` and `rejected` come with `detail`, and the invoice can then be sent again. Later changes arrive through the access point's webhook and are announced as `sale_invoice.peppol_delivered`, `sale_invoice.peppol_rejected` and `sale_invoice.peppol_failed`.
     *
     * @param InvoicesPeppolSendSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesPeppolSendSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesPeppolSend(InvoicesPeppolSendSalesRequest $request, ?array $options = null): ?InvoicesPeppolSendSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/peppol-send",
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
                return InvoicesPeppolSendSalesResponse::fromJson($json);
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
     * Ask the company's Peppol access point what happened to an invoice sent with `sales/invoices/peppol-send`, and store the answer: `pending`, `delivered` (the receiving access point confirmed it), `rejected` (the receiver refused it, see `detail`) or `failed` (it could not be delivered, see `detail`). The access point's webhook updates the same fields without this call. Storecove has no call for the status of a sent document, so for a Storecove access point this answers 422 and the status comes only from its webhook.
     *
     * @param InvoicesPeppolStatusSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesPeppolStatusSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesPeppolStatus(InvoicesPeppolStatusSalesRequest $request, ?array $options = null): ?InvoicesPeppolStatusSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/peppol-status",
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
                return InvoicesPeppolStatusSalesResponse::fromJson($json);
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
     * Render an issued invoice as the national e-invoicing payload for the company country: FatturaPA (IT), KSeF FA(3) (PL) or UBL CIUS-RO (RO). Review the warnings - data the invoice does not carry is flagged, never invented.
     *
     * @param InvoicesEinvoiceXmlSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesEinvoiceXmlSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesEinvoiceXml(InvoicesEinvoiceXmlSalesRequest $request, ?array $options = null): ?InvoicesEinvoiceXmlSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/einvoice-xml",
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
                return InvoicesEinvoiceXmlSalesResponse::fromJson($json);
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
     * Build the national e-invoicing payload and deliver it over the transport configured for the country gateway in compliance settings. With transport=direct the request talks to the tax authority itself - SdICoop over 2-way TLS for Italy, a KSeF session for Poland, ANAF SPV OAuth for Romania - and returns the national number as soon as the channel assigns one. With transport=bridge the payload goes to the configured bridge endpoint (an accredited intermediary or connector) instead.
     *
     * @param InvoicesEinvoiceSendSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesEinvoiceSendSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesEinvoiceSend(InvoicesEinvoiceSendSalesRequest $request, ?array $options = null): ?InvoicesEinvoiceSendSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/einvoice-send",
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
                return InvoicesEinvoiceSendSalesResponse::fromJson($json);
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
     * Ask the national e-invoicing channel what happened to an invoice that was already sent, and store the answer. Italy, Poland and Romania return the outcome only on request - none of them calls back - so this is the way the national number and any rejection reason reach the invoice.
     *
     * @param InvoicesEinvoiceStatusSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesEinvoiceStatusSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesEinvoiceStatus(InvoicesEinvoiceStatusSalesRequest $request, ?array $options = null): ?InvoicesEinvoiceStatusSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/einvoice-status",
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
                return InvoicesEinvoiceStatusSalesResponse::fromJson($json);
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
     * Change a draft sale document. Fields left out keep their value, `lines` replaces every line, and a changed `discountPercent` recomputes the existing lines. Answers 409 when the document is issued or locked, and 422 under the checks of `sales/invoices/create` (the credited document's partner and currency, the OSS and IOSS country, VAT on the lines, the operation type and document series).
     *
     * @param InvoicesUpdateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesUpdateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesUpdate(InvoicesUpdateSalesRequest $request, ?array $options = null): ?InvoicesUpdateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/update",
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
                return InvoicesUpdateSalesResponse::fromJson($json);
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
     * Delete a draft sale document and release the time entries billed on it. Answers 409 when the document is issued (credit it instead) or locked.
     *
     * @param InvoicesDeleteSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesDeleteSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesDelete(InvoicesDeleteSalesRequest $request, ?array $options = null): ?InvoicesDeleteSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/delete",
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
                return InvoicesDeleteSalesResponse::fromJson($json);
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
     * Issue a draft sale document: assigns the next number (from its document series, else from `series` or the type's default prefix and the year), the issue date (`issueDate`, else the draft's, else today) and a missing due date from the partner's payment term, and for an invoice, credit note or advance invoice posts the journal entry and stores the VAT evidence. `warehouseId` (or the series' warehouse) takes the sold goods of an invoice out of stock with a cost of goods sold entry; `returnToStock` puts them back for a credit note that credits an invoice. A credit note is set against the unpaid balance of the credited document. Emits `sale_invoice.issued`, `sale_invoice.paid` when a credit note settles the credited invoice in full, and `intercompany.invoice_mirrored` when the partner is linked to another company of the group (a draft purchase invoice is created there). Answers 409 when the document is already issued or locked or the accounting period is locked, 422 when the lines carry VAT under a scheme that charges none, when credit notes would exceed the credited total, or when `returnToStock` is used on anything but a credit note of an invoice.
     *
     * @param InvoicesIssueSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesIssueSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesIssue(InvoicesIssueSalesRequest $request, ?array $options = null): ?InvoicesIssueSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/issue",
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
                return InvoicesIssueSalesResponse::fromJson($json);
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
     * Lock a sale document. A locked document is refused with 409 by `sales/invoices/update`, `sales/invoices/delete`, `sales/invoices/issue` and `sales/invoices/apply-advance` until `sales/invoices/unlock`.
     *
     * @param InvoicesLockSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesLockSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesLock(InvoicesLockSalesRequest $request, ?array $options = null): ?InvoicesLockSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/lock",
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
                return InvoicesLockSalesResponse::fromJson($json);
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
     * Unlock a sale document locked with `sales/invoices/lock`.
     *
     * @param InvoicesUnlockSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesUnlockSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesUnlock(InvoicesUnlockSalesRequest $request, ?array $options = null): ?InvoicesUnlockSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/unlock",
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
                return InvoicesUnlockSalesResponse::fromJson($json);
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
     * Return the customer payment link of a sale document, rendered from the company's payment link template (`sales/invoices/payment-settings/update`); `url` is null when the company has no template or the document is not issued. The document's payment token is created on first use. Answers 409 when the document is already paid.
     *
     * @param InvoicesPaymentLinkSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesPaymentLinkSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesPaymentLink(InvoicesPaymentLinkSalesRequest $request, ?array $options = null): ?InvoicesPaymentLinkSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/payment-link",
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
                return InvoicesPaymentLinkSalesResponse::fromJson($json);
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
     * Return the company's payment link template, the https URL that `sales/invoices/payment-link`, the invoice PDF and the invoice e-mail fill in for an issued, unpaid document.
     *
     * @param InvoicesPaymentSettingsGetSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesPaymentSettingsGetSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesPaymentSettingsGet(InvoicesPaymentSettingsGetSalesRequest $request = new InvoicesPaymentSettingsGetSalesRequest(), ?array $options = null): ?InvoicesPaymentSettingsGetSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/payment-settings/get",
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
                return InvoicesPaymentSettingsGetSalesResponse::fromJson($json);
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
     * Set or clear (null) the company's payment link template: an https URL in which `{{number}}`, `{{amount}}` (the unpaid balance), `{{currency}}`, `{{token}}`, `{{invoiceId}}` and `{{partnerName}}` are replaced, URL-encoded, when a link is rendered.
     *
     * @param InvoicesPaymentSettingsUpdateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesPaymentSettingsUpdateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesPaymentSettingsUpdate(InvoicesPaymentSettingsUpdateSalesRequest $request, ?array $options = null): ?InvoicesPaymentSettingsUpdateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/payment-settings/update",
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
                return InvoicesPaymentSettingsUpdateSalesResponse::fromJson($json);
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
     * List the revenue recognition schedules: the tranches of deferred income of issued invoices whose lines are recognised ratably, by milestone or by percent complete, each with its status and the journal transaction that recognised it. Filterable by invoiceId, invoiceLineId, status, method and scheduleDate; sortable by scheduleDate and createdAt.
     *
     * @param RecognitionSchedulesListSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecognitionSchedulesListSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recognitionSchedulesList(RecognitionSchedulesListSalesRequest $request = new RecognitionSchedulesListSalesRequest(), ?array $options = null): ?RecognitionSchedulesListSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recognition-schedules/list",
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
                return RecognitionSchedulesListSalesResponse::fromJson($json);
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
     * Apply a fully paid advance invoice to an issued invoice of the same partner: posts the settlement journal entry dated `date` (default today), with the applied amount's share of the advance VAT, and records the amount as a payment of the invoice. `amount` defaults to the smaller of the unapplied advance and the invoice's unpaid balance. Emits `sale_invoice.paid` when the invoice becomes fully paid. Answers 409 when the advance is not fully paid, is already applied or credited, when the invoice has nothing left to pay, or when `amount` exceeds the unapplied advance or the unpaid balance; 422 when the advance is not in the company's base currency or the two documents differ in currency.
     *
     * @param InvoicesApplyAdvanceSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesApplyAdvanceSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesApplyAdvance(InvoicesApplyAdvanceSalesRequest $request, ?array $options = null): ?InvoicesApplyAdvanceSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/apply-advance",
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
                return InvoicesApplyAdvanceSalesResponse::fromJson($json);
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
     * List the sale documents of the company with the partner name. Filterable by partnerId, type, status, paymentStatus, fullNumber, issueDate, currency, agreementId, creditedInvoiceId, operationTypeId, documentSeriesId, lockedAt, grossTotal, netTotal, vatTotal, dueDate, orderNumber, seriesLabel, locale and recurringInvoiceId; sortable by createdAt, issueDate, fullNumber, grossTotal, netTotal, vatTotal, status and paymentStatus.
     *
     * @param InvoicesListSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoicesListSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoicesList(InvoicesListSalesRequest $request = new InvoicesListSalesRequest(), ?array $options = null): ?InvoicesListSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoices/list",
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
                return InvoicesListSalesResponse::fromJson($json);
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
     * Create a draft delivery act of goods or services (`type`) for a partner, dated `documentDate` (default today). Lines come from `lines`, else from the sale invoice in `saleInvoiceId`, else the act has none; the number is assigned by `sales/acts/issue`. Answers 422 when the sale invoice belongs to another partner or, when its lines are copied, has none.
     *
     * @param ActsCreateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ActsCreateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function actsCreate(ActsCreateSalesRequest $request, ?array $options = null): ?ActsCreateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/acts/create",
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
                return ActsCreateSalesResponse::fromJson($json);
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
     * Change a draft delivery act; fields left out keep their value and `lines` replaces every line. Answers 409 when the act is issued or cancelled, 422 when the linked sale invoice belongs to another partner.
     *
     * @param ActsUpdateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ActsUpdateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function actsUpdate(ActsUpdateSalesRequest $request, ?array $options = null): ?ActsUpdateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/acts/update",
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
                return ActsUpdateSalesResponse::fromJson($json);
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
     * Issue a draft delivery act: assigns the next number of its series for the year of the document date. When the act is linked to a sale invoice with pending milestone recognition schedules, they are all recognised on the act's document date, which posts the recognition journal entry and emits `revenue_recognition.posted`. Answers 409 when the act is not a draft, 422 when it has no lines.
     *
     * @param ActsIssueSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ActsIssueSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function actsIssue(ActsIssueSalesRequest $request, ?array $options = null): ?ActsIssueSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/acts/issue",
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
                return ActsIssueSalesResponse::fromJson($json);
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
     * Cancel a draft or issued delivery act. Answers 409 when it is already cancelled.
     *
     * @param ActsCancelSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ActsCancelSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function actsCancel(ActsCancelSalesRequest $request, ?array $options = null): ?ActsCancelSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/acts/cancel",
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
                return ActsCancelSalesResponse::fromJson($json);
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
     * Return one delivery act with its lines.
     *
     * @param ActsGetSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ActsGetSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function actsGet(ActsGetSalesRequest $request, ?array $options = null): ?ActsGetSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/acts/get",
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
                return ActsGetSalesResponse::fromJson($json);
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
     * List delivery acts. Filterable by status, type, partnerId and documentDate; sortable by createdAt, documentDate and fullNumber.
     *
     * @param ActsListSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ActsListSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function actsList(ActsListSalesRequest $request = new ActsListSalesRequest(), ?array $options = null): ?ActsListSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/acts/list",
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
                return ActsListSalesResponse::fromJson($json);
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
     * Render a delivery act as a PDF in `locale`, returned base64-encoded, with the number of the linked sale invoice when there is one.
     *
     * @param ActsPdfSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ActsPdfSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function actsPdf(ActsPdfSalesRequest $request, ?array $options = null): ?ActsPdfSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/acts/pdf",
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
                return ActsPdfSalesResponse::fromJson($json);
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
     * Create a named template for invoices or credit notes (`documentType`): the header defaults and the lines that `sales/recurring-invoices/generate` turns into invoices. Answers 422 when a referenced partner, agreement, operation type, document series, catalog item or project does not exist or the series is for another document type; 409 when a template with that name exists.
     *
     * @param InvoiceTemplatesCreateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoiceTemplatesCreateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoiceTemplatesCreate(InvoiceTemplatesCreateSalesRequest $request, ?array $options = null): ?InvoiceTemplatesCreateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoice-templates/create",
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
                return InvoiceTemplatesCreateSalesResponse::fromJson($json);
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
     * Change a template; fields left out keep their value and `lines` replaces every line. The 422 reference checks of `sales/invoice-templates/create` apply; 409 when the new name is taken.
     *
     * @param InvoiceTemplatesUpdateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoiceTemplatesUpdateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoiceTemplatesUpdate(InvoiceTemplatesUpdateSalesRequest $request, ?array $options = null): ?InvoiceTemplatesUpdateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoice-templates/update",
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
                return InvoiceTemplatesUpdateSalesResponse::fromJson($json);
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
     * Return one invoice template.
     *
     * @param InvoiceTemplatesGetSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoiceTemplatesGetSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoiceTemplatesGet(InvoiceTemplatesGetSalesRequest $request, ?array $options = null): ?InvoiceTemplatesGetSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoice-templates/get",
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
                return InvoiceTemplatesGetSalesResponse::fromJson($json);
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
     * Delete an invoice template.
     *
     * @param InvoiceTemplatesDeleteSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoiceTemplatesDeleteSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoiceTemplatesDelete(InvoiceTemplatesDeleteSalesRequest $request, ?array $options = null): ?InvoiceTemplatesDeleteSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoice-templates/delete",
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
                return InvoiceTemplatesDeleteSalesResponse::fromJson($json);
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
     * List invoice templates. Filterable by name, documentType and partnerId; sortable by name, documentType and createdAt.
     *
     * @param InvoiceTemplatesListSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?InvoiceTemplatesListSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function invoiceTemplatesList(InvoiceTemplatesListSalesRequest $request = new InvoiceTemplatesListSalesRequest(), ?array $options = null): ?InvoiceTemplatesListSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/invoice-templates/list",
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
                return InvoiceTemplatesListSalesResponse::fromJson($json);
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
     * Create a schedule that generates invoices from an invoice template every `interval` periods of `frequency` from `startDate` (the first run) until `endDate`, for `partnerId` or else the template's partner. `autoIssue` issues each generated invoice and `autoSend` e-mails it to `sendTo`, else to the partner. Invoices are generated by `sales/recurring-invoices/run`, `sales/recurring-invoices/generate` and the scheduled job `recurring-invoices`. Answers 422 when the template is a credit note template, when neither the schedule nor the template names a partner, when `endDate` is before `startDate`, or when `autoSend` is set without `autoIssue`.
     *
     * @param RecurringInvoicesCreateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecurringInvoicesCreateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recurringInvoicesCreate(RecurringInvoicesCreateSalesRequest $request, ?array $options = null): ?RecurringInvoicesCreateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recurring-invoices/create",
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
                return RecurringInvoicesCreateSalesResponse::fromJson($json);
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
     * Change a schedule; fields left out keep their value. A change of `startDate`, `frequency` or `interval` moves `nextRunDate` to the first occurrence of the new grid on or after the current next run (or the new start date, if later); an explicit `nextRunDate` wins. `status` switches between `active` and `paused`; a next run past `endDate` makes the schedule `finished`. The 422 checks of `sales/recurring-invoices/create` apply.
     *
     * @param RecurringInvoicesUpdateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecurringInvoicesUpdateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recurringInvoicesUpdate(RecurringInvoicesUpdateSalesRequest $request, ?array $options = null): ?RecurringInvoicesUpdateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recurring-invoices/update",
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
                return RecurringInvoicesUpdateSalesResponse::fromJson($json);
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
     * Return one recurring invoice schedule with the names of its template and partner.
     *
     * @param RecurringInvoicesGetSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecurringInvoicesGetSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recurringInvoicesGet(RecurringInvoicesGetSalesRequest $request, ?array $options = null): ?RecurringInvoicesGetSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recurring-invoices/get",
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
                return RecurringInvoicesGetSalesResponse::fromJson($json);
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
     * Delete a recurring invoice schedule. The invoices it generated stay.
     *
     * @param RecurringInvoicesDeleteSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecurringInvoicesDeleteSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recurringInvoicesDelete(RecurringInvoicesDeleteSalesRequest $request, ?array $options = null): ?RecurringInvoicesDeleteSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recurring-invoices/delete",
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
                return RecurringInvoicesDeleteSalesResponse::fromJson($json);
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
     * Generate the next invoice of a schedule now, dated its `nextRunDate`: creates a draft from the template (due date from the template's payment term, VAT scheme from the template or else resolved for the partner and supply type), issues it when `autoIssue` is set and e-mails it when `autoSend` is set, then moves the schedule to its next occurrence (or to `finished` after the last one) and emits `recurring_invoice.generated`. A failure to issue or send comes back in `error` and is stored as `lastError`; the draft stays. Answers 409 when the schedule is finished, 422 when the template is a credit note template or has no lines.
     *
     * @param RecurringInvoicesGenerateSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecurringInvoicesGenerateSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recurringInvoicesGenerate(RecurringInvoicesGenerateSalesRequest $request, ?array $options = null): ?RecurringInvoicesGenerateSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recurring-invoices/generate",
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
                return RecurringInvoicesGenerateSalesResponse::fromJson($json);
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
     * Generate every invoice due up to `asOfDate` (default today) from the active schedules of the company, catching up to 60 missed occurrences per schedule, as `sales/recurring-invoices/generate` does for one; each generated invoice emits `recurring_invoice.generated`. The answer lists what was generated and the schedules that failed; a failure is also stored as the schedule's `lastError`.
     *
     * @param RecurringInvoicesRunSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecurringInvoicesRunSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recurringInvoicesRun(RecurringInvoicesRunSalesRequest $request = new RecurringInvoicesRunSalesRequest(), ?array $options = null): ?RecurringInvoicesRunSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recurring-invoices/run",
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
                return RecurringInvoicesRunSalesResponse::fromJson($json);
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
     * List recurring invoice schedules with the names of their template and partner. Filterable by status, partnerId, templateId, frequency, nextRunDate and autoIssue; sortable by nextRunDate, startDate, status, frequency and createdAt.
     *
     * @param RecurringInvoicesListSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecurringInvoicesListSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recurringInvoicesList(RecurringInvoicesListSalesRequest $request = new RecurringInvoicesListSalesRequest(), ?array $options = null): ?RecurringInvoicesListSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recurring-invoices/list",
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
                return RecurringInvoicesListSalesResponse::fromJson($json);
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
     * Preview the pending ratable revenue schedules due on or before `asOfDate` (default the company's current date) with their total; nothing is posted. `sales/recognition/run` posts them.
     *
     * @param RecognitionComputeSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecognitionComputeSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recognitionCompute(RecognitionComputeSalesRequest $request = new RecognitionComputeSalesRequest(), ?array $options = null): ?RecognitionComputeSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recognition/compute",
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
                return RecognitionComputeSalesResponse::fromJson($json);
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
     * Recognise deferred revenue: posts one journal entry dated `postingDate` (default `asOfDate`, default the company's current date) that debits the deferred income account and credits each line's revenue account, for the pending ratable schedules due on or before `asOfDate` or for exactly the `scheduleIds` given, marks them recognised, records a run with trigger `manual` and emits `revenue_recognition.posted`. Answers 422 when nothing is due or a given schedule is missing or no longer pending, and 409 when the posting period is locked. Due ratable schedules are also posted by the scheduler once their date has passed (trigger `schedule_due`).
     *
     * @param RecognitionRunSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecognitionRunSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recognitionRun(RecognitionRunSalesRequest $request = new RecognitionRunSalesRequest(), ?array $options = null): ?RecognitionRunSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recognition/run",
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
                return RecognitionRunSalesResponse::fromJson($json);
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
     * Report the percentage of completion of a `percent_complete` invoice line and recognise the revenue up to it: a schedule for the difference between the revenue due at that percentage and the amount already recognised is created and posted at once, dated `date` (default the company's current date), as a run with trigger `progress` that emits `revenue_recognition.posted`. Refused with 422 when the line is not `percent_complete`, the invoice is not an issued standard invoice, the percentage is 0 or above 100, or nothing new is to be recognised; 409 when the period is locked.
     *
     * @param RecognitionProgressSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecognitionProgressSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recognitionProgress(RecognitionProgressSalesRequest $request, ?array $options = null): ?RecognitionProgressSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recognition/progress",
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
                return RecognitionProgressSalesResponse::fromJson($json);
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
     * Apply an IFRS 15 contract modification to a deferred invoice line. Prospective: cancel the pending schedule and respread the unrecognized remainder over the new terms. Cumulative catch-up (ratable only): recompute revenue as if the new terms applied from the start and post the difference immediately.
     *
     * @param RecognitionModifySalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecognitionModifySalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recognitionModify(RecognitionModifySalesRequest $request, ?array $options = null): ?RecognitionModifySalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recognition/modify",
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
                return RecognitionModifySalesResponse::fromJson($json);
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
     * List the revenue recognition runs, newest first; filterable by `runDate` and `trigger`, sortable by `runDate` and `createdAt`.
     *
     * @param RecognitionRunsListSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecognitionRunsListSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recognitionRunsList(RecognitionRunsListSalesRequest $request = new RecognitionRunsListSalesRequest(), ?array $options = null): ?RecognitionRunsListSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recognition/runs/list",
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
                return RecognitionRunsListSalesResponse::fromJson($json);
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
     * Deferred revenue per line of the issued standard invoices whose recognition method is not `point_in_time`: the deferred total, the amount recognised so far, the remainder, the number of pending schedules and the next schedule date, with totals; `invoiceId` limits it to one invoice. For a `percent_complete` line the deferred total is the line's base amount, for the other methods the sum of its schedules.
     *
     * @param RecognitionSummarySalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RecognitionSummarySalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function recognitionSummary(RecognitionSummarySalesRequest $request = new RecognitionSummarySalesRequest(), ?array $options = null): ?RecognitionSummarySalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/recognition/summary",
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
                return RecognitionSummarySalesResponse::fromJson($json);
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
     * List the refund liabilities of issued invoices (created at issue from the lines' `refundEstimatePercent` or by `sales/refund-liability/true-up`): the estimate, the part consumed by credit notes, the settlement refunds and the remaining amount (estimate less consumed), with the invoice number. Filterable by invoiceId; sortable by createdAt and updatedAt.
     *
     * @param RefundLiabilityListSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RefundLiabilityListSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function refundLiabilityList(RefundLiabilityListSalesRequest $request = new RefundLiabilityListSalesRequest(), ?array $options = null): ?RefundLiabilityListSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/refund-liability/list",
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
                return RefundLiabilityListSalesResponse::fromJson($json);
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
     * Re-estimate the refund liability of an issued standard invoice to `estimatedTotal` and post the difference on `date` (default today) between the refund liability account and the invoice's revenue accounts, in proportion to the lines' allocated or net amounts; creates the liability when the invoice has none. Emits `refund_liability.trued_up`. Answers 422 when the invoice is not an issued standard invoice, when the estimate is below the amount already consumed or unchanged, or when the invoice has no revenue to allocate against; 409 when the accounting period is locked.
     *
     * @param RefundLiabilityTrueUpSalesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RefundLiabilityTrueUpSalesResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function refundLiabilityTrueUp(RefundLiabilityTrueUpSalesRequest $request, ?array $options = null): ?RefundLiabilityTrueUpSalesResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/sales/refund-liability/true-up",
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
                return RefundLiabilityTrueUpSalesResponse::fromJson($json);
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
