<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class SecuritiesGetBankResponseOperationsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var string $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var ?string $time
     */
    #[JsonProperty('time')]
    public ?string $time;

    /**
     * @var ?string $assetCategory
     */
    #[JsonProperty('assetCategory')]
    public ?string $assetCategory;

    /**
     * @var ?string $symbol
     */
    #[JsonProperty('symbol')]
    public ?string $symbol;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var ?string $quantity
     */
    #[JsonProperty('quantity')]
    public ?string $quantity;

    /**
     * @var ?string $price
     */
    #[JsonProperty('price')]
    public ?string $price;

    /**
     * @var ?string $amount
     */
    #[JsonProperty('amount')]
    public ?string $amount;

    /**
     * @var ?string $fee
     */
    #[JsonProperty('fee')]
    public ?string $fee;

    /**
     * @var ?string $brokerRealized
     */
    #[JsonProperty('brokerRealized')]
    public ?string $brokerRealized;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $fxRate
     */
    #[JsonProperty('fxRate')]
    public ?string $fxRate;

    /**
     * @var ?string $cashBase
     */
    #[JsonProperty('cashBase')]
    public ?string $cashBase;

    /**
     * @var ?string $costBase
     */
    #[JsonProperty('costBase')]
    public ?string $costBase;

    /**
     * @var ?string $realizedBase
     */
    #[JsonProperty('realizedBase')]
    public ?string $realizedBase;

    /**
     * @var value-of<SecuritiesGetBankResponseOperationsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $note
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @param array{
     *   id: string,
     *   bankAccountId: string,
     *   kind: string,
     *   date: DateTime,
     *   currency: string,
     *   status: value-of<SecuritiesGetBankResponseOperationsItemStatus>,
     *   time?: ?string,
     *   assetCategory?: ?string,
     *   symbol?: ?string,
     *   description?: ?string,
     *   quantity?: ?string,
     *   price?: ?string,
     *   amount?: ?string,
     *   fee?: ?string,
     *   brokerRealized?: ?string,
     *   code?: ?string,
     *   fxRate?: ?string,
     *   cashBase?: ?string,
     *   costBase?: ?string,
     *   realizedBase?: ?string,
     *   note?: ?string,
     *   journalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->bankAccountId = $values['bankAccountId'];
        $this->kind = $values['kind'];
        $this->date = $values['date'];
        $this->time = $values['time'] ?? null;
        $this->assetCategory = $values['assetCategory'] ?? null;
        $this->symbol = $values['symbol'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->currency = $values['currency'];
        $this->quantity = $values['quantity'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->amount = $values['amount'] ?? null;
        $this->fee = $values['fee'] ?? null;
        $this->brokerRealized = $values['brokerRealized'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->fxRate = $values['fxRate'] ?? null;
        $this->cashBase = $values['cashBase'] ?? null;
        $this->costBase = $values['costBase'] ?? null;
        $this->realizedBase = $values['realizedBase'] ?? null;
        $this->status = $values['status'];
        $this->note = $values['note'] ?? null;
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
