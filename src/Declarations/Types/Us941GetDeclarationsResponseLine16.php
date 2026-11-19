<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class Us941GetDeclarationsResponseLine16 extends JsonSerializableType
{
    /**
     * @var array<Us941GetDeclarationsResponseLine16MonthsItem> $months
     */
    #[JsonProperty('months'), ArrayType([Us941GetDeclarationsResponseLine16MonthsItem::class])]
    public array $months;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @param array{
     *   months: array<Us941GetDeclarationsResponseLine16MonthsItem>,
     *   total: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->months = $values['months'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
