<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ItTfrAccrualComputeDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var ?array<string> $includePaymentTypes
     */
    #[JsonProperty('includePaymentTypes'), ArrayType(['string'])]
    public ?array $includePaymentTypes;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   includePaymentTypes?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->includePaymentTypes = $values['includePaymentTypes'] ?? null;
    }
}
