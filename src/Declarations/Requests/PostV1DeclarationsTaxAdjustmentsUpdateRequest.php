<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsTaxAdjustmentsUpdateRequestKind;

class PostV1DeclarationsTaxAdjustmentsUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?value-of<PostV1DeclarationsTaxAdjustmentsUpdateRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public ?string $kind;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $amount
     */
    #[JsonProperty('amount')]
    public ?string $amount;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   id: string,
     *   kind?: ?value-of<PostV1DeclarationsTaxAdjustmentsUpdateRequestKind>,
     *   code?: ?string,
     *   amount?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->kind = $values['kind'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->amount = $values['amount'] ?? null;
        $this->description = $values['description'] ?? null;
    }
}
