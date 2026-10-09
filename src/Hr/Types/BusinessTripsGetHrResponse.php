<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class BusinessTripsGetHrResponse extends JsonSerializableType
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
     * @var string $destinationCountryCode
     */
    #[JsonProperty('destinationCountryCode')]
    public string $destinationCountryCode;

    /**
     * @var string $purpose
     */
    #[JsonProperty('purpose')]
    public string $purpose;

    /**
     * @var DateTime $startDate
     */
    #[JsonProperty('startDate'), Date(Date::TYPE_DATE)]
    public DateTime $startDate;

    /**
     * @var DateTime $endDate
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATE)]
    public DateTime $endDate;

    /**
     * @var int $days
     */
    #[JsonProperty('days')]
    public int $days;

    /**
     * @var string $dailyRate
     */
    #[JsonProperty('dailyRate')]
    public string $dailyRate;

    /**
     * @var string $perDiemAmount
     */
    #[JsonProperty('perDiemAmount')]
    public string $perDiemAmount;

    /**
     * @var value-of<BusinessTripsGetHrResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $payrollRunId
     */
    #[JsonProperty('payrollRunId')]
    public ?string $payrollRunId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   employeeId: string,
     *   destinationCountryCode: string,
     *   purpose: string,
     *   startDate: DateTime,
     *   endDate: DateTime,
     *   days: int,
     *   dailyRate: string,
     *   perDiemAmount: string,
     *   status: value-of<BusinessTripsGetHrResponseStatus>,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   payrollRunId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->employeeId = $values['employeeId'];
        $this->destinationCountryCode = $values['destinationCountryCode'];
        $this->purpose = $values['purpose'];
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
        $this->days = $values['days'];
        $this->dailyRate = $values['dailyRate'];
        $this->perDiemAmount = $values['perDiemAmount'];
        $this->status = $values['status'];
        $this->payrollRunId = $values['payrollRunId'] ?? null;
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
