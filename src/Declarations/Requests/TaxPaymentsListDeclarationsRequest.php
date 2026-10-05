<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\TaxPaymentsListDeclarationsRequestTax;
use Nordlet\Core\Json\JsonProperty;

class TaxPaymentsListDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var value-of<TaxPaymentsListDeclarationsRequestTax> $tax
     */
    #[JsonProperty('tax')]
    public string $tax;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var ?int $month
     */
    #[JsonProperty('month')]
    public ?int $month;

    /**
     * @param array{
     *   tax: value-of<TaxPaymentsListDeclarationsRequestTax>,
     *   year: int,
     *   month?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tax = $values['tax'];
        $this->year = $values['year'];
        $this->month = $values['month'] ?? null;
    }
}
