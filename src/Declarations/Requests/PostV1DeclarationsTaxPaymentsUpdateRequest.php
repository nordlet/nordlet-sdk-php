<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsTaxPaymentsUpdateRequestKind;

class PostV1DeclarationsTaxPaymentsUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?value-of<PostV1DeclarationsTaxPaymentsUpdateRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public ?string $kind;

    /**
     * @var ?string $amount
     */
    #[JsonProperty('amount')]
    public ?string $amount;

    /**
     * @var ?string $paidOn
     */
    #[JsonProperty('paidOn')]
    public ?string $paidOn;

    /**
     * @var ?string $reference
     */
    #[JsonProperty('reference')]
    public ?string $reference;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   id: string,
     *   kind?: ?value-of<PostV1DeclarationsTaxPaymentsUpdateRequestKind>,
     *   amount?: ?string,
     *   paidOn?: ?string,
     *   reference?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->kind = $values['kind'] ?? null;
        $this->amount = $values['amount'] ?? null;
        $this->paidOn = $values['paidOn'] ?? null;
        $this->reference = $values['reference'] ?? null;
        $this->description = $values['description'] ?? null;
    }
}
