<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesSetDeclarationsResponseInputAnnex4 extends JsonSerializableType
{
    /**
     * @var ?string $housing 4000: full or partial cover of the employee’s housing costs
     */
    #[JsonProperty('housing')]
    public ?string $housing;

    /**
     * @var ?string $insurancePremiums 4010: insurance premiums not required by law, the employee being the beneficiary
     */
    #[JsonProperty('insurancePremiums')]
    public ?string $insurancePremiums;

    /**
     * @var ?string $carCompensationAboveLimit 4030: compensation for a personal car used for work above the limit
     */
    #[JsonProperty('carCompensationAboveLimit')]
    public ?string $carCompensationAboveLimit;

    /**
     * @var ?string $employerVehicle 4040: an employer vehicle used for non-work purposes (TuMS § 48 lg 8)
     */
    #[JsonProperty('employerVehicle')]
    public ?string $employerVehicle;

    /**
     * @var ?string $otherProperty 4050: other employer property used for non-work purposes
     */
    #[JsonProperty('otherProperty')]
    public ?string $otherProperty;

    /**
     * @var ?string $loanMarketInterest 4061: interest at market terms on a loan given below market interest
     */
    #[JsonProperty('loanMarketInterest')]
    public ?string $loanMarketInterest;

    /**
     * @var ?string $loanContractInterest 4062: interest at the rate of the loan contract
     */
    #[JsonProperty('loanContractInterest')]
    public ?string $loanContractInterest;

    /**
     * @var ?string $transferMarketPrice 4071: market price of a thing, security, right or service given free or cheap
     */
    #[JsonProperty('transferMarketPrice')]
    public ?string $transferMarketPrice;

    /**
     * @var ?string $transferAppliedPrice 4072: price applied to it
     */
    #[JsonProperty('transferAppliedPrice')]
    public ?string $transferAppliedPrice;

    /**
     * @var ?EeTsdAnnexesSetDeclarationsResponseInputAnnex4StockOption $stockOption
     */
    #[JsonProperty('stockOption')]
    public ?EeTsdAnnexesSetDeclarationsResponseInputAnnex4StockOption $stockOption;

    /**
     * @var ?string $purchaseAppliedPrice 4091: price paid for a thing, security, right or service bought above market
     */
    #[JsonProperty('purchaseAppliedPrice')]
    public ?string $purchaseAppliedPrice;

    /**
     * @var ?string $purchaseMarketPrice 4092: its market price
     */
    #[JsonProperty('purchaseMarketPrice')]
    public ?string $purchaseMarketPrice;

    /**
     * @var ?string $waivedClaims 4100: waiver of a monetary claim
     */
    #[JsonProperty('waivedClaims')]
    public ?string $waivedClaims;

    /**
     * @var ?string $education 4110: education costs not directly related to the job
     */
    #[JsonProperty('education')]
    public ?string $education;

    /**
     * @var ?string $healthPromotion 4120: health promotion above the yearly exempt amount
     */
    #[JsonProperty('healthPromotion')]
    public ?string $healthPromotion;

    /**
     * @var ?string $other 4130: other fringe benefits
     */
    #[JsonProperty('other')]
    public ?string $other;

    /**
     * @var ?string $notTaxedWithIncomeTax 4150: of the total, not taxed with Estonian income tax
     */
    #[JsonProperty('notTaxedWithIncomeTax')]
    public ?string $notTaxedWithIncomeTax;

    /**
     * @var ?string $notTaxedWithSocialTax 4160: of the total, not taxed with Estonian social tax
     */
    #[JsonProperty('notTaxedWithSocialTax')]
    public ?string $notTaxedWithSocialTax;

    /**
     * @param array{
     *   housing?: ?string,
     *   insurancePremiums?: ?string,
     *   carCompensationAboveLimit?: ?string,
     *   employerVehicle?: ?string,
     *   otherProperty?: ?string,
     *   loanMarketInterest?: ?string,
     *   loanContractInterest?: ?string,
     *   transferMarketPrice?: ?string,
     *   transferAppliedPrice?: ?string,
     *   stockOption?: ?EeTsdAnnexesSetDeclarationsResponseInputAnnex4StockOption,
     *   purchaseAppliedPrice?: ?string,
     *   purchaseMarketPrice?: ?string,
     *   waivedClaims?: ?string,
     *   education?: ?string,
     *   healthPromotion?: ?string,
     *   other?: ?string,
     *   notTaxedWithIncomeTax?: ?string,
     *   notTaxedWithSocialTax?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->housing = $values['housing'] ?? null;
        $this->insurancePremiums = $values['insurancePremiums'] ?? null;
        $this->carCompensationAboveLimit = $values['carCompensationAboveLimit'] ?? null;
        $this->employerVehicle = $values['employerVehicle'] ?? null;
        $this->otherProperty = $values['otherProperty'] ?? null;
        $this->loanMarketInterest = $values['loanMarketInterest'] ?? null;
        $this->loanContractInterest = $values['loanContractInterest'] ?? null;
        $this->transferMarketPrice = $values['transferMarketPrice'] ?? null;
        $this->transferAppliedPrice = $values['transferAppliedPrice'] ?? null;
        $this->stockOption = $values['stockOption'] ?? null;
        $this->purchaseAppliedPrice = $values['purchaseAppliedPrice'] ?? null;
        $this->purchaseMarketPrice = $values['purchaseMarketPrice'] ?? null;
        $this->waivedClaims = $values['waivedClaims'] ?? null;
        $this->education = $values['education'] ?? null;
        $this->healthPromotion = $values['healthPromotion'] ?? null;
        $this->other = $values['other'] ?? null;
        $this->notTaxedWithIncomeTax = $values['notTaxedWithIncomeTax'] ?? null;
        $this->notTaxedWithSocialTax = $values['notTaxedWithSocialTax'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
