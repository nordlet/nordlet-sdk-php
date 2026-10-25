<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesViewSalesResponse extends JsonSerializableType
{
    /**
     * @var value-of<InvoicesViewSalesResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<InvoicesViewSalesResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<InvoicesViewSalesResponsePaymentStatus> $paymentStatus
     */
    #[JsonProperty('paymentStatus')]
    public string $paymentStatus;

    /**
     * @var ?string $number
     */
    #[JsonProperty('number')]
    public ?string $number;

    /**
     * @var ?DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $issueDate;

    /**
     * @var ?DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $dueDate;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $netTotal
     */
    #[JsonProperty('netTotal')]
    public string $netTotal;

    /**
     * @var string $vatTotal
     */
    #[JsonProperty('vatTotal')]
    public string $vatTotal;

    /**
     * @var ?string $salesTaxPercent
     */
    #[JsonProperty('salesTaxPercent')]
    public ?string $salesTaxPercent;

    /**
     * @var string $salesTaxTotal
     */
    #[JsonProperty('salesTaxTotal')]
    public string $salesTaxTotal;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var string $paidAmount
     */
    #[JsonProperty('paidAmount')]
    public string $paidAmount;

    /**
     * @var ?string $paidOn
     */
    #[JsonProperty('paidOn')]
    public ?string $paidOn;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?string $payUrl
     */
    #[JsonProperty('payUrl')]
    public ?string $payUrl;

    /**
     * @var InvoicesViewSalesResponseSeller $seller
     */
    #[JsonProperty('seller')]
    public InvoicesViewSalesResponseSeller $seller;

    /**
     * @var InvoicesViewSalesResponseBuyer $buyer
     */
    #[JsonProperty('buyer')]
    public InvoicesViewSalesResponseBuyer $buyer;

    /**
     * @var array<InvoicesViewSalesResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([InvoicesViewSalesResponseLinesItem::class])]
    public array $lines;

    /**
     * @var ?string $token
     */
    #[JsonProperty('token')]
    public ?string $token;

    /**
     * @param array{
     *   type: value-of<InvoicesViewSalesResponseType>,
     *   status: value-of<InvoicesViewSalesResponseStatus>,
     *   paymentStatus: value-of<InvoicesViewSalesResponsePaymentStatus>,
     *   currency: string,
     *   netTotal: string,
     *   vatTotal: string,
     *   salesTaxTotal: string,
     *   grossTotal: string,
     *   paidAmount: string,
     *   seller: InvoicesViewSalesResponseSeller,
     *   buyer: InvoicesViewSalesResponseBuyer,
     *   lines: array<InvoicesViewSalesResponseLinesItem>,
     *   number?: ?string,
     *   issueDate?: ?DateTime,
     *   dueDate?: ?DateTime,
     *   salesTaxPercent?: ?string,
     *   paidOn?: ?string,
     *   notes?: ?string,
     *   payUrl?: ?string,
     *   token?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->status = $values['status'];
        $this->paymentStatus = $values['paymentStatus'];
        $this->number = $values['number'] ?? null;
        $this->issueDate = $values['issueDate'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
        $this->currency = $values['currency'];
        $this->netTotal = $values['netTotal'];
        $this->vatTotal = $values['vatTotal'];
        $this->salesTaxPercent = $values['salesTaxPercent'] ?? null;
        $this->salesTaxTotal = $values['salesTaxTotal'];
        $this->grossTotal = $values['grossTotal'];
        $this->paidAmount = $values['paidAmount'];
        $this->paidOn = $values['paidOn'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->payUrl = $values['payUrl'] ?? null;
        $this->seller = $values['seller'];
        $this->buyer = $values['buyer'];
        $this->lines = $values['lines'];
        $this->token = $values['token'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
