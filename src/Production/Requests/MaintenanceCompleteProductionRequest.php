<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class MaintenanceCompleteProductionRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $completedDate
     */
    #[JsonProperty('completedDate'), Date(Date::TYPE_DATE)]
    public DateTime $completedDate;

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
     *   completedDate: DateTime,
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
