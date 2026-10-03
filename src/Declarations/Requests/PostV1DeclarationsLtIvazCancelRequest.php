<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\PostV1DeclarationsLtIvazCancelRequestEntriesItem;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsLtIvazCancelRequest extends JsonSerializableType
{
    /**
     * @var array<PostV1DeclarationsLtIvazCancelRequestEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([PostV1DeclarationsLtIvazCancelRequestEntriesItem::class])]
    public array $entries;

    /**
     * @var ?bool $persist
     */
    #[JsonProperty('persist')]
    public ?bool $persist;

    /**
     * @param array{
     *   entries: array<PostV1DeclarationsLtIvazCancelRequestEntriesItem>,
     *   persist?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->entries = $values['entries'];
        $this->persist = $values['persist'] ?? null;
    }
}
