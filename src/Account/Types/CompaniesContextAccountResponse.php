<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CompaniesContextAccountResponse extends JsonSerializableType
{
    /**
     * @var CompaniesContextAccountResponsePeriods $periods
     */
    #[JsonProperty('periods')]
    public CompaniesContextAccountResponsePeriods $periods;

    /**
     * @var array<string, string> $postingRules
     */
    #[JsonProperty('postingRules'), ArrayType(['string' => 'string'])]
    public array $postingRules;

    /**
     * @var array<CompaniesContextAccountResponseBankAccountsItem> $bankAccounts
     */
    #[JsonProperty('bankAccounts'), ArrayType([CompaniesContextAccountResponseBankAccountsItem::class])]
    public array $bankAccounts;

    /**
     * @var array<CompaniesContextAccountResponseVatTypesUsedItem> $vatTypesUsed
     */
    #[JsonProperty('vatTypesUsed'), ArrayType([CompaniesContextAccountResponseVatTypesUsedItem::class])]
    public array $vatTypesUsed;

    /**
     * @var array<CompaniesContextAccountResponseFilingsItem> $filings
     */
    #[JsonProperty('filings'), ArrayType([CompaniesContextAccountResponseFilingsItem::class])]
    public array $filings;

    /**
     * @var CompaniesContextAccountResponsePayroll $payroll
     */
    #[JsonProperty('payroll')]
    public CompaniesContextAccountResponsePayroll $payroll;

    /**
     * @var CompaniesContextAccountResponseProfile $profile
     */
    #[JsonProperty('profile')]
    public CompaniesContextAccountResponseProfile $profile;

    /**
     * @param array{
     *   periods: CompaniesContextAccountResponsePeriods,
     *   postingRules: array<string, string>,
     *   bankAccounts: array<CompaniesContextAccountResponseBankAccountsItem>,
     *   vatTypesUsed: array<CompaniesContextAccountResponseVatTypesUsedItem>,
     *   filings: array<CompaniesContextAccountResponseFilingsItem>,
     *   payroll: CompaniesContextAccountResponsePayroll,
     *   profile: CompaniesContextAccountResponseProfile,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periods = $values['periods'];
        $this->postingRules = $values['postingRules'];
        $this->bankAccounts = $values['bankAccounts'];
        $this->vatTypesUsed = $values['vatTypesUsed'];
        $this->filings = $values['filings'];
        $this->payroll = $values['payroll'];
        $this->profile = $values['profile'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
