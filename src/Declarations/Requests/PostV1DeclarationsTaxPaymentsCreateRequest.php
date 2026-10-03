<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\PostV1DeclarationsTaxPaymentsCreateRequestTax;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsTaxPaymentsCreateRequestKind;

class PostV1DeclarationsTaxPaymentsCreateRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsTaxPaymentsCreateRequestTax> $tax
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
     * @var value-of<PostV1DeclarationsTaxPaymentsCreateRequestKind> $kind
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
     *   tax: value-of<PostV1DeclarationsTaxPaymentsCreateRequestTax>,
     *   year: int,
     *   kind: value-of<PostV1DeclarationsTaxPaymentsCreateRequestKind>,
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
        $this->tax = $values['tax'];
        $this->year = $values['year'];
        $this->month = $values['month'] ?? null;
        $this->kind = $values['kind'];
        $this->amount = $values['amount'];
        $this->paidOn = $values['paidOn'];
        $this->reference = $values['reference'] ?? null;
        $this->description = $values['description'];
    }
}
