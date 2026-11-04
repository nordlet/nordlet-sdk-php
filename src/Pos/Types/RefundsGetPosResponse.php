<?php

namespace Nordlet\Pos\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class RefundsGetPosResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $shiftId
     */
    #[JsonProperty('shiftId')]
    public string $shiftId;

    /**
     * @var string $receiptId
     */
    #[JsonProperty('receiptId')]
    public string $receiptId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

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
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var string $cashAmount
     */
    #[JsonProperty('cashAmount')]
    public string $cashAmount;

    /**
     * @var ?string $cogsTotal
     */
    #[JsonProperty('cogsTotal')]
    public ?string $cogsTotal;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var array<RefundsGetPosResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([RefundsGetPosResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   shiftId: string,
     *   receiptId: string,
     *   date: DateTime,
     *   netTotal: string,
     *   vatTotal: string,
     *   grossTotal: string,
     *   cashAmount: string,
     *   createdAt: DateTime,
     *   lines: array<RefundsGetPosResponseLinesItem>,
     *   cogsTotal?: ?string,
     *   journalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->shiftId = $values['shiftId'];
        $this->receiptId = $values['receiptId'];
        $this->date = $values['date'];
        $this->netTotal = $values['netTotal'];
        $this->vatTotal = $values['vatTotal'];
        $this->grossTotal = $values['grossTotal'];
        $this->cashAmount = $values['cashAmount'];
        $this->cogsTotal = $values['cogsTotal'] ?? null;
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
