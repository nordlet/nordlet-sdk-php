<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionMaintenanceCompleteResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $workCenterId
     */
    #[JsonProperty('workCenterId')]
    public string $workCenterId;

    /**
     * @var value-of<PostV1ProductionMaintenanceCompleteResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<PostV1ProductionMaintenanceCompleteResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $plannedDate
     */
    #[JsonProperty('plannedDate')]
    public string $plannedDate;

    /**
     * @var ?string $completedDate
     */
    #[JsonProperty('completedDate')]
    public ?string $completedDate;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $downtimeHours
     */
    #[JsonProperty('downtimeHours')]
    public ?string $downtimeHours;

    /**
     * @var ?string $cost
     */
    #[JsonProperty('cost')]
    public ?string $cost;

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
     * @param array{
     *   id: string,
     *   workCenterId: string,
     *   type: value-of<PostV1ProductionMaintenanceCompleteResponseType>,
     *   status: value-of<PostV1ProductionMaintenanceCompleteResponseStatus>,
     *   plannedDate: string,
     *   createdAt: string,
     *   completedDate?: ?string,
     *   description?: ?string,
     *   downtimeHours?: ?string,
     *   cost?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->workCenterId = $values['workCenterId'];
        $this->type = $values['type'];
        $this->status = $values['status'];
        $this->plannedDate = $values['plannedDate'];
        $this->completedDate = $values['completedDate'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->downtimeHours = $values['downtimeHours'] ?? null;
        $this->cost = $values['cost'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
