<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class PaymentsListSalesResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public string $invoiceId;

    /**
     * @var ?string $fullNumber
     */
    #[JsonProperty('fullNumber')]
    public ?string $fullNumber;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var value-of<PaymentsListSalesResponseRowsItemMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @param array{
     *   id: string,
     *   date: DateTime,
     *   invoiceId: string,
     *   partnerId: string,
     *   partnerName: string,
     *   amount: string,
     *   currency: string,
     *   method: value-of<PaymentsListSalesResponseRowsItemMethod>,
     *   fullNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->date = $values['date'];
        $this->invoiceId = $values['invoiceId'];
        $this->fullNumber = $values['fullNumber'] ?? null;
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'];
        $this->amount = $values['amount'];
        $this->currency = $values['currency'];
        $this->method = $values['method'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
