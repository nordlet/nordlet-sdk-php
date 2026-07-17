<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsLtIntrastatObligationResponseArrivalsMonthlyItem extends JsonSerializableType
{
    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @var string $cumulative
     */
    #[JsonProperty('cumulative')]
    public string $cumulative;

    /**
     * @param array{
     *   month: int,
     *   value: string,
     *   cumulative: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->month = $values['month'];
        $this->value = $values['value'];
        $this->cumulative = $values['cumulative'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
