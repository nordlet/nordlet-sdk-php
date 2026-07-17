<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1PayrollRunsCreateRequestLinesItem extends JsonSerializableType
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
     * @var ?array<PostV1PayrollRunsCreateRequestLinesItemAdditionsItem> $additions
     */
    #[JsonProperty('additions'), ArrayType([PostV1PayrollRunsCreateRequestLinesItemAdditionsItem::class])]
    public ?array $additions;

    /**
     * @var ?array<PostV1PayrollRunsCreateRequestLinesItemDeductionsItem> $deductions
     */
    #[JsonProperty('deductions'), ArrayType([PostV1PayrollRunsCreateRequestLinesItemDeductionsItem::class])]
    public ?array $deductions;

    /**
     * @param array{
     *   employeeId: string,
     *   gross?: ?string,
     *   additions?: ?array<PostV1PayrollRunsCreateRequestLinesItemAdditionsItem>,
     *   deductions?: ?array<PostV1PayrollRunsCreateRequestLinesItemDeductionsItem>,
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
