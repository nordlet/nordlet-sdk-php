<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceBanksUpsertResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $bic
     */
    #[JsonProperty('bic')]
    public string $bic;

    /**
     * @var ?string $bankCode
     */
    #[JsonProperty('bankCode')]
    public ?string $bankCode;

    /**
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @param array{
     *   id: string,
     *   countryCode: string,
     *   name: string,
     *   bic: string,
     *   isActive: bool,
     *   bankCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->countryCode = $values['countryCode'];
        $this->name = $values['name'];
        $this->bic = $values['bic'];
        $this->bankCode = $values['bankCode'] ?? null;
        $this->isActive = $values['isActive'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
