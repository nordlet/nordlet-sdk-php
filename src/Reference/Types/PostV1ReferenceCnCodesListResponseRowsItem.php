<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceCnCodesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $nameLt
     */
    #[JsonProperty('nameLt')]
    public ?string $nameLt;

    /**
     * @var ?string $supplementaryUnit
     */
    #[JsonProperty('supplementaryUnit')]
    public ?string $supplementaryUnit;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   nameLt?: ?string,
     *   supplementaryUnit?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->nameLt = $values['nameLt'] ?? null;
        $this->supplementaryUnit = $values['supplementaryUnit'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
