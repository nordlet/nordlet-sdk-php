<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesRecognitionComputeResponse extends JsonSerializableType
{
    /**
     * @var string $asOfDate
     */
    #[JsonProperty('asOfDate')]
    public string $asOfDate;

    /**
     * @var string $totalAmount
     */
    #[JsonProperty('totalAmount')]
    public string $totalAmount;

    /**
     * @var array<PostV1SalesRecognitionComputeResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1SalesRecognitionComputeResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   asOfDate: string,
     *   totalAmount: string,
     *   rows: array<PostV1SalesRecognitionComputeResponseRowsItem>,
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
