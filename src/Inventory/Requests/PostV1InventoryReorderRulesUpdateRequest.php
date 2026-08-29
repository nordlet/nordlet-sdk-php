<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1InventoryReorderRulesUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $minQty
     */
    #[JsonProperty('minQty')]
    public ?string $minQty;

    /**
     * @var ?string $reorderQty
     */
    #[JsonProperty('reorderQty')]
    public ?string $reorderQty;

    /**
     * @var ?bool $isActive
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   id: string,
     *   minQty?: ?string,
     *   reorderQty?: ?string,
     *   isActive?: ?bool,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->minQty = $values['minQty'] ?? null;
        $this->reorderQty = $values['reorderQty'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
