<?php

namespace Nordlet\Webhooks\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1WebhooksDeliveriesListRequestSortItem extends JsonSerializableType
{
    /**
     * @var string $field
     */
    #[JsonProperty('field')]
    public string $field;

    /**
     * @var ?value-of<PostV1WebhooksDeliveriesListRequestSortItemDir> $dir
     */
    #[JsonProperty('dir')]
    public ?string $dir;

    /**
     * @param array{
     *   field: string,
     *   dir?: ?value-of<PostV1WebhooksDeliveriesListRequestSortItemDir>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->dir = $values['dir'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
