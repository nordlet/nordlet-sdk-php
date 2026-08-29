<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\PostV1ProductionMaintenanceCreateRequestType;

class PostV1ProductionMaintenanceCreateRequest extends JsonSerializableType
{
    /**
     * @var string $workCenterId
     */
    #[JsonProperty('workCenterId')]
    public string $workCenterId;

    /**
     * @var value-of<PostV1ProductionMaintenanceCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $plannedDate
     */
    #[JsonProperty('plannedDate')]
    public string $plannedDate;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   workCenterId: string,
     *   type: value-of<PostV1ProductionMaintenanceCreateRequestType>,
     *   plannedDate: string,
     *   description?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->workCenterId = $values['workCenterId'];
        $this->type = $values['type'];
        $this->plannedDate = $values['plannedDate'];
        $this->description = $values['description'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
