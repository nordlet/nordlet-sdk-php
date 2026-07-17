<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ConsolidationGroupsGetResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $presentationCurrency
     */
    #[JsonProperty('presentationCurrency')]
    public string $presentationCurrency;

    /**
     * @var int $memberCount
     */
    #[JsonProperty('memberCount')]
    public int $memberCount;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var array<PostV1ConsolidationGroupsGetResponseMembersItem> $members
     */
    #[JsonProperty('members'), ArrayType([PostV1ConsolidationGroupsGetResponseMembersItem::class])]
    public array $members;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   presentationCurrency: string,
     *   memberCount: int,
     *   createdAt: string,
     *   updatedAt: string,
     *   members: array<PostV1ConsolidationGroupsGetResponseMembersItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->presentationCurrency = $values['presentationCurrency'];
        $this->memberCount = $values['memberCount'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->members = $values['members'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
