<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class RecognitionComputeSalesResponse extends JsonSerializableType
{
    /**
     * @var DateTime $asOfDate
     */
    #[JsonProperty('asOfDate'), Date(Date::TYPE_DATE)]
    public DateTime $asOfDate;

    /**
     * @var string $totalAmount
     */
    #[JsonProperty('totalAmount')]
    public string $totalAmount;

    /**
     * @var array<RecognitionComputeSalesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([RecognitionComputeSalesResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   asOfDate: DateTime,
     *   totalAmount: string,
     *   rows: array<RecognitionComputeSalesResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->asOfDate = $values['asOfDate'];
        $this->totalAmount = $values['totalAmount'];
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
