<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReferenceCountriesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var bool $isEu
     */
    #[JsonProperty('isEu')]
    public bool $isEu;

    /**
     * @var bool $isEea
     */
    #[JsonProperty('isEea')]
    public bool $isEea;

    /**
     * @var array<string, string> $names
     */
    #[JsonProperty('names'), ArrayType(['string' => 'string'])]
    public array $names;

    /**
     * @param array{
     *   code: string,
     *   isEu: bool,
     *   isEea: bool,
     *   names: array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->isEu = $values['isEu'];
        $this->isEea = $values['isEea'];
        $this->names = $values['names'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
