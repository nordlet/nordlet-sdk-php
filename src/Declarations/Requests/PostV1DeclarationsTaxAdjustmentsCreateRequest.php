<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsTaxAdjustmentsCreateRequestKind;

class PostV1DeclarationsTaxAdjustmentsCreateRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var value-of<PostV1DeclarationsTaxAdjustmentsCreateRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @param array{
     *   year: int,
     *   kind: value-of<PostV1DeclarationsTaxAdjustmentsCreateRequestKind>,
     *   amount: string,
     *   description: string,
     *   code?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->kind = $values['kind'];
        $this->code = $values['code'] ?? null;
        $this->amount = $values['amount'];
        $this->description = $values['description'];
    }
}
