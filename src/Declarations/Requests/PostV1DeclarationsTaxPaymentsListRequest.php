<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\PostV1DeclarationsTaxPaymentsListRequestTax;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsTaxPaymentsListRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsTaxPaymentsListRequestTax> $tax
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
     *   tax: value-of<PostV1DeclarationsTaxPaymentsListRequestTax>,
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
