<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class MaintenanceCompleteProductionResponse extends JsonSerializableType
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
     * @var value-of<MaintenanceCompleteProductionResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<MaintenanceCompleteProductionResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var DateTime $plannedDate
     */
    #[JsonProperty('plannedDate'), Date(Date::TYPE_DATE)]
    public DateTime $plannedDate;

    /**
     * @var ?DateTime $completedDate
     */
    #[JsonProperty('completedDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $completedDate;

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
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   workCenterId: string,
     *   type: value-of<MaintenanceCompleteProductionResponseType>,
     *   status: value-of<MaintenanceCompleteProductionResponseStatus>,
     *   plannedDate: DateTime,
     *   createdAt: DateTime,
     *   completedDate?: ?DateTime,
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
