<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ProductionRoutingsGetResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var array<PostV1ProductionRoutingsGetResponseOperationsItem> $operations
     */
    #[JsonProperty('operations'), ArrayType([PostV1ProductionRoutingsGetResponseOperationsItem::class])]
    public array $operations;

    /**
     * @param array{
     *   id: string,
     *   code: string,
     *   name: string,
     *   isActive: bool,
     *   createdAt: string,
     *   operations: array<PostV1ProductionRoutingsGetResponseOperationsItem>,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->isActive = $values['isActive'];
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->operations = $values['operations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
