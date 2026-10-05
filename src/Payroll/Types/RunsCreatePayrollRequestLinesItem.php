<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class RunsCreatePayrollRequestLinesItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var ?string $gross
     */
    #[JsonProperty('gross')]
    public ?string $gross;

    /**
     * @var ?array<RunsCreatePayrollRequestLinesItemAdditionsItem> $additions
     */
    #[JsonProperty('additions'), ArrayType([RunsCreatePayrollRequestLinesItemAdditionsItem::class])]
    public ?array $additions;

    /**
     * @var ?array<RunsCreatePayrollRequestLinesItemDeductionsItem> $deductions
     */
    #[JsonProperty('deductions'), ArrayType([RunsCreatePayrollRequestLinesItemDeductionsItem::class])]
    public ?array $deductions;

    /**
     * @param array{
     *   employeeId: string,
     *   gross?: ?string,
     *   additions?: ?array<RunsCreatePayrollRequestLinesItemAdditionsItem>,
     *   deductions?: ?array<RunsCreatePayrollRequestLinesItemDeductionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->gross = $values['gross'] ?? null;
        $this->additions = $values['additions'] ?? null;
        $this->deductions = $values['deductions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
