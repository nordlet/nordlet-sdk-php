<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1PayrollRunsCreateResponseLinesItem extends JsonSerializableType
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
     * @var ?string $contractId
     */
    #[JsonProperty('contractId')]
    public ?string $contractId;

    /**
     * @var string $employeeName
     */
    #[JsonProperty('employeeName')]
    public string $employeeName;

    /**
     * @var string $gross
     */
    #[JsonProperty('gross')]
    public string $gross;

    /**
     * @var string $natura
     */
    #[JsonProperty('natura')]
    public string $natura;

    /**
     * @var array<PostV1PayrollRunsCreateResponseLinesItemAdditionsItem> $additions
     */
    #[JsonProperty('additions'), ArrayType([PostV1PayrollRunsCreateResponseLinesItemAdditionsItem::class])]
    public array $additions;

    /**
     * @var array<PostV1PayrollRunsCreateResponseLinesItemDeductionsItem> $deductions
     */
    #[JsonProperty('deductions'), ArrayType([PostV1PayrollRunsCreateResponseLinesItemDeductionsItem::class])]
    public array $deductions;

    /**
     * @var string $taxableBase
     */
    #[JsonProperty('taxableBase')]
    public string $taxableBase;

    /**
     * @var string $npd
     */
    #[JsonProperty('npd')]
    public string $npd;

    /**
     * @var string $gpm
     */
    #[JsonProperty('gpm')]
    public string $gpm;

    /**
     * @var string $sodraEmployee
     */
    #[JsonProperty('sodraEmployee')]
    public string $sodraEmployee;

    /**
     * @var string $sodraEmployer
     */
    #[JsonProperty('sodraEmployer')]
    public string $sodraEmployer;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @param array{
     *   id: string,
     *   employeeId: string,
     *   employeeName: string,
     *   gross: string,
     *   natura: string,
     *   additions: array<PostV1PayrollRunsCreateResponseLinesItemAdditionsItem>,
     *   deductions: array<PostV1PayrollRunsCreateResponseLinesItemDeductionsItem>,
     *   taxableBase: string,
     *   npd: string,
     *   gpm: string,
     *   sodraEmployee: string,
     *   sodraEmployer: string,
     *   net: string,
     *   contractId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->employeeId = $values['employeeId'];
        $this->contractId = $values['contractId'] ?? null;
        $this->employeeName = $values['employeeName'];
        $this->gross = $values['gross'];
        $this->natura = $values['natura'];
        $this->additions = $values['additions'];
        $this->deductions = $values['deductions'];
        $this->taxableBase = $values['taxableBase'];
        $this->npd = $values['npd'];
        $this->gpm = $values['gpm'];
        $this->sodraEmployee = $values['sodraEmployee'];
        $this->sodraEmployer = $values['sodraEmployer'];
        $this->net = $values['net'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
