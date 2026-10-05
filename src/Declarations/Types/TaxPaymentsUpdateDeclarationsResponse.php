<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TaxPaymentsUpdateDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $tax
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
     * @var value-of<TaxPaymentsUpdateDeclarationsResponseKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var string $paidOn
     */
    #[JsonProperty('paidOn')]
    public string $paidOn;

    /**
     * @var ?string $reference
     */
    #[JsonProperty('reference')]
    public ?string $reference;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @param array{
     *   id: string,
     *   tax: string,
     *   year: int,
     *   kind: value-of<TaxPaymentsUpdateDeclarationsResponseKind>,
     *   amount: string,
     *   paidOn: string,
     *   description: string,
     *   month?: ?int,
     *   reference?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->tax = $values['tax'];
        $this->year = $values['year'];
        $this->month = $values['month'] ?? null;
        $this->kind = $values['kind'];
        $this->amount = $values['amount'];
        $this->paidOn = $values['paidOn'];
        $this->reference = $values['reference'] ?? null;
        $this->description = $values['description'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
