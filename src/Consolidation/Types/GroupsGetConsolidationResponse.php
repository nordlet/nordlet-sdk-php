<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class GroupsGetConsolidationResponse extends JsonSerializableType
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
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var array<GroupsGetConsolidationResponseMembersItem> $members
     */
    #[JsonProperty('members'), ArrayType([GroupsGetConsolidationResponseMembersItem::class])]
    public array $members;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   presentationCurrency: string,
     *   memberCount: int,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   members: array<GroupsGetConsolidationResponseMembersItem>,
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
