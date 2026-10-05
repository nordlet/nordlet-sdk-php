<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\LtIvazCancelDeclarationsRequestEntriesItem;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class LtIvazCancelDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var array<LtIvazCancelDeclarationsRequestEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([LtIvazCancelDeclarationsRequestEntriesItem::class])]
    public array $entries;

    /**
     * @var ?bool $persist
     */
    #[JsonProperty('persist')]
    public ?bool $persist;

    /**
     * @param array{
     *   entries: array<LtIvazCancelDeclarationsRequestEntriesItem>,
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
