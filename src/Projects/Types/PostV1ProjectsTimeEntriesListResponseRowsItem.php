<?php

namespace Nordlet\Projects\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProjectsTimeEntriesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var bool $billable
     */
    #[JsonProperty('billable')]
    public bool $billable;

    /**
     * @var ?string $hourlyRate
     */
    #[JsonProperty('hourlyRate')]
    public ?string $hourlyRate;

    /**
     * @var ?string $billedInvoiceId
     */
    #[JsonProperty('billedInvoiceId')]
    public ?string $billedInvoiceId;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   projectId: string,
     *   date: string,
     *   hours: string,
     *   billable: bool,
     *   createdAt: string,
     *   updatedAt: string,
     *   employeeId?: ?string,
     *   description?: ?string,
     *   hourlyRate?: ?string,
     *   billedInvoiceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->projectId = $values['projectId'];
        $this->employeeId = $values['employeeId'] ?? null;
        $this->date = $values['date'];
        $this->hours = $values['hours'];
        $this->description = $values['description'] ?? null;
        $this->billable = $values['billable'];
        $this->hourlyRate = $values['hourlyRate'] ?? null;
        $this->billedInvoiceId = $values['billedInvoiceId'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
