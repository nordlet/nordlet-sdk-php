<?php

namespace Nordlet\Review\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class QueueListReviewResponse extends JsonSerializableType
{
    /**
     * @var array<QueueListReviewResponseItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([QueueListReviewResponseItemsItem::class])]
    public array $items;

    /**
     * @var int $total
     */
    #[JsonProperty('total')]
    public int $total;

    /**
     * @param array{
     *   items: array<QueueListReviewResponseItemsItem>,
     *   total: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->items = $values['items'];
        $this->total = $values['total'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
