<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceUnitsListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $nameLt
     */
    #[JsonProperty('nameLt')]
    public string $nameLt;

    /**
     * @var string $nameEn
     */
    #[JsonProperty('nameEn')]
    public string $nameEn;

    /**
     * @param array{
     *   code: string,
     *   nameLt: string,
     *   nameEn: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->nameLt = $values['nameLt'];
        $this->nameEn = $values['nameEn'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
