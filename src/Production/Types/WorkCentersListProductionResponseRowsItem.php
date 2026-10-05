<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class WorkCentersListProductionResponseRowsItem extends JsonSerializableType
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
     * @var string $costPerHour
     */
    #[JsonProperty('costPerHour')]
    public string $costPerHour;

    /**
     * @var ?string $costAccountCode
     */
    #[JsonProperty('costAccountCode')]
    public ?string $costAccountCode;

    /**
     * @var ?int $maintenanceIntervalDays
     */
    #[JsonProperty('maintenanceIntervalDays')]
    public ?int $maintenanceIntervalDays;

    /**
     * @var ?DateTime $nextMaintenanceDate
     */
    #[JsonProperty('nextMaintenanceDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $nextMaintenanceDate;

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
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   code: string,
     *   name: string,
     *   costPerHour: string,
     *   isActive: bool,
     *   createdAt: DateTime,
     *   costAccountCode?: ?string,
     *   maintenanceIntervalDays?: ?int,
     *   nextMaintenanceDate?: ?DateTime,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->costPerHour = $values['costPerHour'];
        $this->costAccountCode = $values['costAccountCode'] ?? null;
        $this->maintenanceIntervalDays = $values['maintenanceIntervalDays'] ?? null;
        $this->nextMaintenanceDate = $values['nextMaintenanceDate'] ?? null;
        $this->isActive = $values['isActive'];
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
