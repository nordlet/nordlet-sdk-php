<?php

namespace Nordlet\Cash\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Cash\Types\OrdersCreateCashRequestType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class OrdersCreateCashRequest extends JsonSerializableType
{
    /**
     * @var value-of<OrdersCreateCashRequestType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var string $purpose
     */
    #[JsonProperty('purpose')]
    public string $purpose;

    /**
     * @var ?string $counterAccountCode
     */
    #[JsonProperty('counterAccountCode')]
    public ?string $counterAccountCode;

    /**
     * @var ?string $cashAccountCode
     */
    #[JsonProperty('cashAccountCode')]
    public ?string $cashAccountCode;

    /**
     * @var ?string $saleInvoiceId
     */
    #[JsonProperty('saleInvoiceId')]
    public ?string $saleInvoiceId;

    /**
     * @var ?string $purchaseInvoiceId
     */
    #[JsonProperty('purchaseInvoiceId')]
    public ?string $purchaseInvoiceId;

    /**
     * @var ?string $series
     */
    #[JsonProperty('series')]
    public ?string $series;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $employeeId
     */
    #[JsonProperty('employeeId')]
    public ?string $employeeId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   type: value-of<OrdersCreateCashRequestType>,
     *   date: DateTime,
     *   amount: string,
     *   purpose: string,
     *   counterAccountCode?: ?string,
     *   cashAccountCode?: ?string,
     *   saleInvoiceId?: ?string,
     *   purchaseInvoiceId?: ?string,
     *   series?: ?string,
     *   partnerId?: ?string,
     *   employeeId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->date = $values['date'];
        $this->amount = $values['amount'];
        $this->purpose = $values['purpose'];
        $this->counterAccountCode = $values['counterAccountCode'] ?? null;
        $this->cashAccountCode = $values['cashAccountCode'] ?? null;
        $this->saleInvoiceId = $values['saleInvoiceId'] ?? null;
        $this->purchaseInvoiceId = $values['purchaseInvoiceId'] ?? null;
        $this->series = $values['series'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
        $this->employeeId = $values['employeeId'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
