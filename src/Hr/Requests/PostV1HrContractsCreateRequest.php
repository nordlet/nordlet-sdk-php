<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrContractsCreateRequestType;
use Nordlet\Hr\Types\PostV1HrContractsCreateRequestSalaryType;

class PostV1HrContractsCreateRequest extends JsonSerializableType
{
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
     * @var ?string $contractNo
     */
    #[JsonProperty('contractNo')]
    public ?string $contractNo;

    /**
     * @var ?value-of<PostV1HrContractsCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

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
     * @var string $baseSalary
     */
    #[JsonProperty('baseSalary')]
    public string $baseSalary;

    /**
     * @var ?value-of<PostV1HrContractsCreateRequestSalaryType> $salaryType
     */
    #[JsonProperty('salaryType')]
    public ?string $salaryType;

    /**
     * @var ?string $workHours
     */
    #[JsonProperty('workHours')]
    public ?string $workHours;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   employeeId: string,
     *   startDate: string,
     *   baseSalary: string,
     *   positionId?: ?string,
     *   departmentId?: ?string,
     *   scheduleId?: ?string,
     *   agreementId?: ?string,
     *   contractNo?: ?string,
     *   type?: ?value-of<PostV1HrContractsCreateRequestType>,
     *   endDate?: ?string,
     *   salaryType?: ?value-of<PostV1HrContractsCreateRequestSalaryType>,
     *   workHours?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->positionId = $values['positionId'] ?? null;
        $this->departmentId = $values['departmentId'] ?? null;
        $this->scheduleId = $values['scheduleId'] ?? null;
        $this->agreementId = $values['agreementId'] ?? null;
        $this->contractNo = $values['contractNo'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'] ?? null;
        $this->baseSalary = $values['baseSalary'];
        $this->salaryType = $values['salaryType'] ?? null;
        $this->workHours = $values['workHours'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
