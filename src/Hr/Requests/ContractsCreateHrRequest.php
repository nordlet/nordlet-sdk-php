<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\ContractsCreateHrRequestType;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Hr\Types\ContractsCreateHrRequestSalaryType;

class ContractsCreateHrRequest extends JsonSerializableType
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
     * @var ?value-of<ContractsCreateHrRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

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
     * @var string $baseSalary
     */
    #[JsonProperty('baseSalary')]
    public string $baseSalary;

    /**
     * @var ?value-of<ContractsCreateHrRequestSalaryType> $salaryType
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
     *   startDate: DateTime,
     *   baseSalary: string,
     *   positionId?: ?string,
     *   departmentId?: ?string,
     *   scheduleId?: ?string,
     *   agreementId?: ?string,
     *   contractNo?: ?string,
     *   type?: ?value-of<ContractsCreateHrRequestType>,
     *   endDate?: ?DateTime,
     *   salaryType?: ?value-of<ContractsCreateHrRequestSalaryType>,
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
