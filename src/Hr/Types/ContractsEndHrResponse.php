<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ContractsEndHrResponse extends JsonSerializableType
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
     * @var ?string $positionId
     */
    #[JsonProperty('positionId')]
    public ?string $positionId;

    /**
     * @var ?string $departmentId
     */
    #[JsonProperty('departmentId')]
    public ?string $departmentId;

    /**
     * @var ?string $scheduleId
     */
    #[JsonProperty('scheduleId')]
    public ?string $scheduleId;

    /**
     * @var ?string $agreementId
     */
    #[JsonProperty('agreementId')]
    public ?string $agreementId;

    /**
     * @var string $contractNo
     */
    #[JsonProperty('contractNo')]
    public string $contractNo;

    /**
     * @var value-of<ContractsEndHrResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var DateTime $startDate
     */
    #[JsonProperty('startDate'), Date(Date::TYPE_DATE)]
    public DateTime $startDate;

    /**
     * @var ?DateTime $endDate
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $endDate;

    /**
     * @var ?string $endReason
     */
    #[JsonProperty('endReason')]
    public ?string $endReason;

    /**
     * @var string $baseSalary
     */
    #[JsonProperty('baseSalary')]
    public string $baseSalary;

    /**
     * @var value-of<ContractsEndHrResponseSalaryType> $salaryType
     */
    #[JsonProperty('salaryType')]
    public string $salaryType;

    /**
     * @var string $workHours
     */
    #[JsonProperty('workHours')]
    public string $workHours;

    /**
     * @var value-of<ContractsEndHrResponseWorkHoursUnit> $workHoursUnit
     */
    #[JsonProperty('workHoursUnit')]
    public string $workHoursUnit;

    /**
     * @var value-of<ContractsEndHrResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

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
     *   employeeId: string,
     *   contractNo: string,
     *   type: value-of<ContractsEndHrResponseType>,
     *   startDate: DateTime,
     *   baseSalary: string,
     *   salaryType: value-of<ContractsEndHrResponseSalaryType>,
     *   workHours: string,
     *   workHoursUnit: value-of<ContractsEndHrResponseWorkHoursUnit>,
     *   status: value-of<ContractsEndHrResponseStatus>,
     *   createdAt: DateTime,
     *   positionId?: ?string,
     *   departmentId?: ?string,
     *   scheduleId?: ?string,
     *   agreementId?: ?string,
     *   endDate?: ?DateTime,
     *   endReason?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->employeeId = $values['employeeId'];
        $this->positionId = $values['positionId'] ?? null;
        $this->departmentId = $values['departmentId'] ?? null;
        $this->scheduleId = $values['scheduleId'] ?? null;
        $this->agreementId = $values['agreementId'] ?? null;
        $this->contractNo = $values['contractNo'];
        $this->type = $values['type'];
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'] ?? null;
        $this->endReason = $values['endReason'] ?? null;
        $this->baseSalary = $values['baseSalary'];
        $this->salaryType = $values['salaryType'];
        $this->workHours = $values['workHours'];
        $this->workHoursUnit = $values['workHoursUnit'];
        $this->status = $values['status'];
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
