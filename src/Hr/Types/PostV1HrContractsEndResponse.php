<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1HrContractsEndResponse extends JsonSerializableType
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
     * @var value-of<PostV1HrContractsEndResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $startDate
     */
    #[JsonProperty('startDate')]
    public string $startDate;

    /**
     * @var ?string $endDate
     */
    #[JsonProperty('endDate')]
    public ?string $endDate;

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
     * @var value-of<PostV1HrContractsEndResponseSalaryType> $salaryType
     */
    #[JsonProperty('salaryType')]
    public string $salaryType;

    /**
     * @var string $workHours
     */
    #[JsonProperty('workHours')]
    public string $workHours;

    /**
     * @var value-of<PostV1HrContractsEndResponseWorkHoursUnit> $workHoursUnit
     */
    #[JsonProperty('workHoursUnit')]
    public string $workHoursUnit;

    /**
     * @var value-of<PostV1HrContractsEndResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

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
     *   employeeId: string,
     *   contractNo: string,
     *   type: value-of<PostV1HrContractsEndResponseType>,
     *   startDate: string,
     *   baseSalary: string,
     *   salaryType: value-of<PostV1HrContractsEndResponseSalaryType>,
     *   workHours: string,
     *   workHoursUnit: value-of<PostV1HrContractsEndResponseWorkHoursUnit>,
     *   status: value-of<PostV1HrContractsEndResponseStatus>,
     *   createdAt: string,
     *   positionId?: ?string,
     *   departmentId?: ?string,
     *   scheduleId?: ?string,
     *   agreementId?: ?string,
     *   endDate?: ?string,
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
