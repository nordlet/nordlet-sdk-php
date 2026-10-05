<?php

namespace Nordlet\DocumentSeries\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class GetDocumentSeriesResponse extends JsonSerializableType
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
     * @var ?int $allocatedFrom
     */
    #[JsonProperty('allocatedFrom')]
    public ?int $allocatedFrom;

    /**
     * @var ?int $allocatedTo
     */
    #[JsonProperty('allocatedTo')]
    public ?int $allocatedTo;

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
     * @param array{
     *   id: string,
     *   documentType: string,
     *   prefix: string,
     *   numberLength: int,
     *   nextNumber: int,
     *   printSeries: bool,
     *   isDefault: bool,
     *   isActive: bool,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   name?: ?string,
     *   label?: ?string,
     *   operationTypeId?: ?string,
     *   allocatedFrom?: ?int,
     *   allocatedTo?: ?int,
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
        $this->allocatedFrom = $values['allocatedFrom'] ?? null;
        $this->allocatedTo = $values['allocatedTo'] ?? null;
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
