<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionWorkCentersUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $costPerHour
     */
    #[JsonProperty('costPerHour')]
    public ?string $costPerHour;

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
     * @var ?bool $isActive
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   id: string,
     *   code?: ?string,
     *   name?: ?string,
     *   costPerHour?: ?string,
     *   costAccountCode?: ?string,
     *   maintenanceIntervalDays?: ?int,
     *   isActive?: ?bool,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->costPerHour = $values['costPerHour'] ?? null;
        $this->costAccountCode = $values['costAccountCode'] ?? null;
        $this->maintenanceIntervalDays = $values['maintenanceIntervalDays'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
