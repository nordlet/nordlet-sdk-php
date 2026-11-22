<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsDeWithholdingReconciliationGetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var ?array<string> $taxPaid
     */
    #[JsonProperty('taxPaid'), ArrayType(['string'])]
    public ?array $taxPaid;

    /**
     * @param array{
     *   year: int,
     *   taxPaid?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->taxPaid = $values['taxPaid'] ?? null;
    }
}
