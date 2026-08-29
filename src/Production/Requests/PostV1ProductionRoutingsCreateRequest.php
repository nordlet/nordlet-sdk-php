<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\PostV1ProductionRoutingsCreateRequestOperationsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1ProductionRoutingsCreateRequest extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var array<PostV1ProductionRoutingsCreateRequestOperationsItem> $operations
     */
    #[JsonProperty('operations'), ArrayType([PostV1ProductionRoutingsCreateRequestOperationsItem::class])]
    public array $operations;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   operations: array<PostV1ProductionRoutingsCreateRequestOperationsItem>,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->notes = $values['notes'] ?? null;
        $this->operations = $values['operations'];
    }
}
