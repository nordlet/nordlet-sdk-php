<?php

namespace Nordlet\DocumentSeries\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\DocumentSeries\Types\UpdateDocumentSeriesRequestDocumentType;

class UpdateDocumentSeriesRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?value-of<UpdateDocumentSeriesRequestDocumentType> $documentType
     */
    #[JsonProperty('documentType')]
    public ?string $documentType;

    /**
     * @var ?string $prefix
     */
    #[JsonProperty('prefix')]
    public ?string $prefix;

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
     * @var ?int $numberLength
     */
    #[JsonProperty('numberLength')]
    public ?int $numberLength;

    /**
     * @var ?int $nextNumber
     */
    #[JsonProperty('nextNumber')]
    public ?int $nextNumber;

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
     * @var ?bool $printSeries
     */
    #[JsonProperty('printSeries')]
    public ?bool $printSeries;

    /**
     * @var ?bool $isDefault
     */
    #[JsonProperty('isDefault')]
    public ?bool $isDefault;

    /**
     * @var ?bool $isActive
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @param array{
     *   id: string,
     *   documentType?: ?value-of<UpdateDocumentSeriesRequestDocumentType>,
     *   prefix?: ?string,
     *   name?: ?string,
     *   label?: ?string,
     *   operationTypeId?: ?string,
     *   numberLength?: ?int,
     *   nextNumber?: ?int,
     *   allocatedFrom?: ?int,
     *   allocatedTo?: ?int,
     *   warehouseId?: ?string,
     *   printSeries?: ?bool,
     *   isDefault?: ?bool,
     *   isActive?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->documentType = $values['documentType'] ?? null;
        $this->prefix = $values['prefix'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->label = $values['label'] ?? null;
        $this->operationTypeId = $values['operationTypeId'] ?? null;
        $this->numberLength = $values['numberLength'] ?? null;
        $this->nextNumber = $values['nextNumber'] ?? null;
        $this->allocatedFrom = $values['allocatedFrom'] ?? null;
        $this->allocatedTo = $values['allocatedTo'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->printSeries = $values['printSeries'] ?? null;
        $this->isDefault = $values['isDefault'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
    }
}
