<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProjectsTimeEntriesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $projectId
     */
    #[JsonProperty('projectId')]
    public string $projectId;

    /**
     * @var ?string $employeeId
     */
    #[JsonProperty('employeeId')]
    public ?string $employeeId;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $hours
     */
    #[JsonProperty('hours')]
    public string $hours;

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
     *   projectId: string,
     *   date: string,
     *   hours: string,
     *   employeeId?: ?string,
     *   description?: ?string,
     *   billable?: ?bool,
     *   hourlyRate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->projectId = $values['projectId'];
        $this->employeeId = $values['employeeId'] ?? null;
        $this->date = $values['date'];
        $this->hours = $values['hours'];
        $this->description = $values['description'] ?? null;
        $this->billable = $values['billable'] ?? null;
        $this->hourlyRate = $values['hourlyRate'] ?? null;
    }
}
