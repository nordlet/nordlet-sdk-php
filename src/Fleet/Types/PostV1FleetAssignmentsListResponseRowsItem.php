<?php

namespace Nordlet\Fleet\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1FleetAssignmentsListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $vehicleId
     */
    #[JsonProperty('vehicleId')]
    public string $vehicleId;

    /**
     * @var string $plateNumber
     */
    #[JsonProperty('plateNumber')]
    public string $plateNumber;

    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $employeeName
     */
    #[JsonProperty('employeeName')]
    public string $employeeName;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var ?string $toDate
     */
    #[JsonProperty('toDate')]
    public ?string $toDate;

    /**
     * @var bool $privateUse
     */
    #[JsonProperty('privateUse')]
    public bool $privateUse;

    /**
     * @var bool $employerPaysFuel
     */
    #[JsonProperty('employerPaysFuel')]
    public bool $employerPaysFuel;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   vehicleId: string,
     *   plateNumber: string,
     *   employeeId: string,
     *   employeeName: string,
     *   fromDate: string,
     *   privateUse: bool,
     *   employerPaysFuel: bool,
     *   createdAt: string,
     *   toDate?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->vehicleId = $values['vehicleId'];
        $this->plateNumber = $values['plateNumber'];
        $this->employeeId = $values['employeeId'];
        $this->employeeName = $values['employeeName'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'] ?? null;
        $this->privateUse = $values['privateUse'];
        $this->employerPaysFuel = $values['employerPaysFuel'];
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
