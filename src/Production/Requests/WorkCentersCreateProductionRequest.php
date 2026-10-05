<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class WorkCentersCreateProductionRequest extends JsonSerializableType
{
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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   costPerHour?: ?string,
     *   costAccountCode?: ?string,
     *   maintenanceIntervalDays?: ?int,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->costPerHour = $values['costPerHour'] ?? null;
        $this->costAccountCode = $values['costAccountCode'] ?? null;
        $this->maintenanceIntervalDays = $values['maintenanceIntervalDays'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
