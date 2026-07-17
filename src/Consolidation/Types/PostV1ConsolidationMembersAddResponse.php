<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationMembersAddResponse extends JsonSerializableType
{
    /**
     * @var string $memberCompanyId
     */
    #[JsonProperty('memberCompanyId')]
    public string $memberCompanyId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $baseCurrency
     */
    #[JsonProperty('baseCurrency')]
    public string $baseCurrency;

    /**
     * @var string $ownershipPercent
     */
    #[JsonProperty('ownershipPercent')]
    public string $ownershipPercent;

    /**
     * @var value-of<PostV1ConsolidationMembersAddResponseMethod> $method
     */
    #[JsonProperty('method')]
    public string $method;

    /**
     * @param array{
     *   memberCompanyId: string,
     *   name: string,
     *   baseCurrency: string,
     *   ownershipPercent: string,
     *   method: value-of<PostV1ConsolidationMembersAddResponseMethod>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->memberCompanyId = $values['memberCompanyId'];
        $this->name = $values['name'];
        $this->baseCurrency = $values['baseCurrency'];
        $this->ownershipPercent = $values['ownershipPercent'];
        $this->method = $values['method'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
