<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DocumentSeriesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $documentType
     */
    #[JsonProperty('documentType')]
    public string $documentType;

    /**
     * @var string $prefix
     */
    #[JsonProperty('prefix')]
    public string $prefix;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $label
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var ?string $operationTypeId
     */
    #[JsonProperty('operationTypeId')]
    public ?string $operationTypeId;

    /**
     * @var int $numberLength
     */
    #[JsonProperty('numberLength')]
    public int $numberLength;

    /**
     * @var int $nextNumber
     */
    #[JsonProperty('nextNumber')]
    public int $nextNumber;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var bool $printSeries
     */
    #[JsonProperty('printSeries')]
    public bool $printSeries;

    /**
     * @var bool $isDefault
     */
    #[JsonProperty('isDefault')]
    public bool $isDefault;

    /**
     * @var bool $isActive
     */
    #[JsonProperty('isActive')]
    public bool $isActive;

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
     * @param array{
     *   id: string,
     *   documentType: string,
     *   prefix: string,
     *   numberLength: int,
     *   nextNumber: int,
     *   printSeries: bool,
     *   isDefault: bool,
     *   isActive: bool,
     *   createdAt: string,
     *   updatedAt: string,
     *   name?: ?string,
     *   label?: ?string,
     *   operationTypeId?: ?string,
     *   warehouseId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->documentType = $values['documentType'];
        $this->prefix = $values['prefix'];
        $this->name = $values['name'] ?? null;
        $this->label = $values['label'] ?? null;
        $this->operationTypeId = $values['operationTypeId'] ?? null;
        $this->numberLength = $values['numberLength'];
        $this->nextNumber = $values['nextNumber'];
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->printSeries = $values['printSeries'];
        $this->isDefault = $values['isDefault'];
        $this->isActive = $values['isActive'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
