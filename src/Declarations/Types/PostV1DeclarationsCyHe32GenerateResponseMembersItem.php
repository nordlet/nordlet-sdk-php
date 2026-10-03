<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsCyHe32GenerateResponseMembersItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $identifier
     */
    #[JsonProperty('identifier')]
    public string $identifier;

    /**
     * @var string $shares
     */
    #[JsonProperty('shares')]
    public string $shares;

    /**
     * @var string $nominalValue
     */
    #[JsonProperty('nominalValue')]
    public string $nominalValue;

    /**
     * @var string $shareClass
     */
    #[JsonProperty('shareClass')]
    public string $shareClass;

    /**
     * @param array{
     *   name: string,
     *   identifier: string,
     *   shares: string,
     *   nominalValue: string,
     *   shareClass: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->identifier = $values['identifier'];
        $this->shares = $values['shares'];
        $this->nominalValue = $values['nominalValue'];
        $this->shareClass = $values['shareClass'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
