<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

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
     * @var PostV1ReferenceCountriesListResponseRowsItemNames $names
     */
    #[JsonProperty('names')]
    public PostV1ReferenceCountriesListResponseRowsItemNames $names;

    /**
     * @param array{
     *   code: string,
     *   isEu: bool,
     *   isEea: bool,
     *   names: PostV1ReferenceCountriesListResponseRowsItemNames,
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
