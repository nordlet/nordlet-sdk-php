<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class Us941GetDeclarationsResponseLine16MonthsItem extends JsonSerializableType
{
    /**
     * @var float $month
     */
    #[JsonProperty('month')]
    public float $month;

    /**
     * @var string $liability
     */
    #[JsonProperty('liability')]
    public string $liability;

    /**
     * @param array{
     *   month: float,
     *   liability: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->month = $values['month'];
        $this->liability = $values['liability'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
