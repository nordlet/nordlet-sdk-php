<?php

namespace Nordlet\Pos\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ReceiptsCreatePosResponse extends JsonSerializableType
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
     * @var int $number
     */
    #[JsonProperty('number')]
    public int $number;

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
     * @var string $cardAmount
     */
    #[JsonProperty('cardAmount')]
    public string $cardAmount;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var array<ReceiptsCreatePosResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([ReceiptsCreatePosResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   shiftId: string,
     *   number: int,
     *   netTotal: string,
     *   vatTotal: string,
     *   grossTotal: string,
     *   cashAmount: string,
     *   cardAmount: string,
     *   createdAt: DateTime,
     *   lines: array<ReceiptsCreatePosResponseLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->shiftId = $values['shiftId'];
        $this->number = $values['number'];
        $this->netTotal = $values['netTotal'];
        $this->vatTotal = $values['vatTotal'];
        $this->grossTotal = $values['grossTotal'];
        $this->cashAmount = $values['cashAmount'];
        $this->cardAmount = $values['cardAmount'];
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
