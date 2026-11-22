<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItem extends JsonSerializableType
{
    /**
     * @var string $runId
     */
    #[JsonProperty('runId')]
    public string $runId;

    /**
     * @var string $periodStart
     */
    #[JsonProperty('periodStart')]
    public string $periodStart;

    /**
     * @var string $periodEnd
     */
    #[JsonProperty('periodEnd')]
    public string $periodEnd;

    /**
     * @var DateTime $payDate
     */
    #[JsonProperty('payDate'), Date(Date::TYPE_DATE)]
    public DateTime $payDate;

    /**
     * @var ?UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemBasisOfPay $basisOfPay
     */
    #[JsonProperty('basisOfPay')]
    public ?UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemBasisOfPay $basisOfPay;

    /**
     * @var ?string $hoursWorked
     */
    #[JsonProperty('hoursWorked')]
    public ?string $hoursWorked;

    /**
     * @var string $regularPay
     */
    #[JsonProperty('regularPay')]
    public string $regularPay;

    /**
     * @var string $overtimePay
     */
    #[JsonProperty('overtimePay')]
    public string $overtimePay;

    /**
     * @var string $overtimeHours
     */
    #[JsonProperty('overtimeHours')]
    public string $overtimeHours;

    /**
     * @var ?string $straightTimeEarnings
     */
    #[JsonProperty('straightTimeEarnings')]
    public ?string $straightTimeEarnings;

    /**
     * @var ?string $overtimePremium
     */
    #[JsonProperty('overtimePremium')]
    public ?string $overtimePremium;

    /**
     * @var array<UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemAdditionsItem> $additions
     */
    #[JsonProperty('additions'), ArrayType([UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemAdditionsItem::class])]
    public array $additions;

    /**
     * @var array<UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemDeductionsItem> $deductions
     */
    #[JsonProperty('deductions'), ArrayType([UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemDeductionsItem::class])]
    public array $deductions;

    /**
     * @var string $totalWages
     */
    #[JsonProperty('totalWages')]
    public string $totalWages;

    /**
     * @param array{
     *   runId: string,
     *   periodStart: string,
     *   periodEnd: string,
     *   payDate: DateTime,
     *   regularPay: string,
     *   overtimePay: string,
     *   overtimeHours: string,
     *   additions: array<UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemAdditionsItem>,
     *   deductions: array<UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemDeductionsItem>,
     *   totalWages: string,
     *   basisOfPay?: ?UsFlsaRecordsListDeclarationsResponseEmployeesItemPayPeriodsItemBasisOfPay,
     *   hoursWorked?: ?string,
     *   straightTimeEarnings?: ?string,
     *   overtimePremium?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->runId = $values['runId'];
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->payDate = $values['payDate'];
        $this->basisOfPay = $values['basisOfPay'] ?? null;
        $this->hoursWorked = $values['hoursWorked'] ?? null;
        $this->regularPay = $values['regularPay'];
        $this->overtimePay = $values['overtimePay'];
        $this->overtimeHours = $values['overtimeHours'];
        $this->straightTimeEarnings = $values['straightTimeEarnings'] ?? null;
        $this->overtimePremium = $values['overtimePremium'] ?? null;
        $this->additions = $values['additions'];
        $this->deductions = $values['deductions'];
        $this->totalWages = $values['totalWages'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
