<?php

namespace Nordlet\Fleet\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class AssignmentsEndFleetResponse extends JsonSerializableType
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
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var ?DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $toDate;

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
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   vehicleId: string,
     *   plateNumber: string,
     *   employeeId: string,
     *   employeeName: string,
     *   fromDate: DateTime,
     *   privateUse: bool,
     *   employerPaysFuel: bool,
     *   createdAt: DateTime,
     *   toDate?: ?DateTime,
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
