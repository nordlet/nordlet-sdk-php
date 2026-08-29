<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProjectsTimeEntriesUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?string $hours
     */
    #[JsonProperty('hours')]
    public ?string $hours;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?bool $billable
     */
    #[JsonProperty('billable')]
    public ?bool $billable;

    /**
     * @var ?string $hourlyRate
     */
    #[JsonProperty('hourlyRate')]
    public ?string $hourlyRate;

    /**
     * @param array{
     *   id: string,
     *   date?: ?string,
     *   hours?: ?string,
     *   description?: ?string,
     *   billable?: ?bool,
     *   hourlyRate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->date = $values['date'] ?? null;
        $this->hours = $values['hours'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->billable = $values['billable'] ?? null;
        $this->hourlyRate = $values['hourlyRate'] ?? null;
    }
}
