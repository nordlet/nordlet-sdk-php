<?php

namespace Nordlet\Fleet\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class VehiclesUpdateFleetResponseCurrentAssignment extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @param array{
     *   id: string,
     *   employeeId: string,
     *   employeeName: string,
     *   fromDate: DateTime,
     *   privateUse: bool,
     *   employerPaysFuel: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->employeeId = $values['employeeId'];
        $this->employeeName = $values['employeeName'];
        $this->fromDate = $values['fromDate'];
        $this->privateUse = $values['privateUse'];
        $this->employerPaysFuel = $values['employerPaysFuel'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
