<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesSetDeclarationsRequestAnnex6ReductionsItem extends JsonSerializableType
{
    /**
     * @var int $month 6141
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var int $year 6142
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var string $amount 6143: the amount taxed in that period whose basis fell away
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   month: int,
     *   year: int,
     *   amount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->month = $values['month'];
        $this->year = $values['year'];
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
