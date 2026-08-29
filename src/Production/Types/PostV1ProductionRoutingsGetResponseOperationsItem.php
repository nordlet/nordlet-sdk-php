<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionRoutingsGetResponseOperationsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var int $sequence
     */
    #[JsonProperty('sequence')]
    public int $sequence;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $workCenterId
     */
    #[JsonProperty('workCenterId')]
    public string $workCenterId;

    /**
     * @var string $setupMinutes
     */
    #[JsonProperty('setupMinutes')]
    public string $setupMinutes;

    /**
     * @var string $runMinutesPerUnit
     */
    #[JsonProperty('runMinutesPerUnit')]
    public string $runMinutesPerUnit;

    /**
     * @var ?string $qualityCheckName
     */
    #[JsonProperty('qualityCheckName')]
    public ?string $qualityCheckName;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   id: string,
     *   sequence: int,
     *   name: string,
     *   workCenterId: string,
     *   setupMinutes: string,
     *   runMinutesPerUnit: string,
     *   qualityCheckName?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->sequence = $values['sequence'];
        $this->name = $values['name'];
        $this->workCenterId = $values['workCenterId'];
        $this->setupMinutes = $values['setupMinutes'];
        $this->runMinutesPerUnit = $values['runMinutesPerUnit'];
        $this->qualityCheckName = $values['qualityCheckName'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
