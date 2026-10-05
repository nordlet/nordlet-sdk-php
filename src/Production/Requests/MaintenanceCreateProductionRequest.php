<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Production\Types\MaintenanceCreateProductionRequestType;
use DateTime;
use Nordlet\Core\Types\Date;

class MaintenanceCreateProductionRequest extends JsonSerializableType
{
    /**
     * @var string $workCenterId
     */
    #[JsonProperty('workCenterId')]
    public string $workCenterId;

    /**
     * @var value-of<MaintenanceCreateProductionRequestType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var DateTime $plannedDate
     */
    #[JsonProperty('plannedDate'), Date(Date::TYPE_DATE)]
    public DateTime $plannedDate;

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
     *   type: value-of<MaintenanceCreateProductionRequestType>,
     *   plannedDate: DateTime,
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
