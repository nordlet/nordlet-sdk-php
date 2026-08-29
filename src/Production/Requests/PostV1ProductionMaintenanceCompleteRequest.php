<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionMaintenanceCompleteRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $completedDate
     */
    #[JsonProperty('completedDate')]
    public string $completedDate;

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
     * @param array{
     *   id: string,
     *   completedDate: string,
     *   downtimeHours?: ?string,
     *   cost?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->completedDate = $values['completedDate'];
        $this->downtimeHours = $values['downtimeHours'] ?? null;
        $this->cost = $values['cost'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
