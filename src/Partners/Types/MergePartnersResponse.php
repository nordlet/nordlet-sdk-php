<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class MergePartnersResponse extends JsonSerializableType
{
    /**
     * @var string $targetId
     */
    #[JsonProperty('targetId')]
    public string $targetId;

    /**
     * @var string $sourceId
     */
    #[JsonProperty('sourceId')]
    public string $sourceId;

    /**
     * @var array<MergePartnersResponseMovedItem> $moved
     */
    #[JsonProperty('moved'), ArrayType([MergePartnersResponseMovedItem::class])]
    public array $moved;

    /**
     * @param array{
     *   targetId: string,
     *   sourceId: string,
     *   moved: array<MergePartnersResponseMovedItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->targetId = $values['targetId'];
        $this->sourceId = $values['sourceId'];
        $this->moved = $values['moved'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
