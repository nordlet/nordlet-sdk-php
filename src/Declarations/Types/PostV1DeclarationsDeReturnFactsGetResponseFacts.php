<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsDeReturnFactsGetResponseFacts extends JsonSerializableType
{
    /**
     * @var ?array<string> $changedShareholderIds
     */
    #[JsonProperty('changedShareholderIds'), ArrayType(['string'])]
    public ?array $changedShareholderIds;

    /**
     * @var ?bool $shareholderContracts
     */
    #[JsonProperty('shareholderContracts')]
    public ?bool $shareholderContracts;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsContractsItem> $contracts
     */
    #[JsonProperty('contracts'), ArrayType([PostV1DeclarationsDeReturnFactsGetResponseFactsContractsItem::class])]
    public ?array $contracts;

    /**
     * @var ?bool $harmfulShareAcquisition
     */
    #[JsonProperty('harmfulShareAcquisition')]
    public ?bool $harmfulShareAcquisition;

    /**
     * @var ?string $coronaAid
     */
    #[JsonProperty('coronaAid')]
    public ?string $coronaAid;

    /**
     * @var ?string $lossCarryback
     */
    #[JsonProperty('lossCarryback')]
    public ?string $lossCarryback;

    /**
     * @var ?string $donationCarryforward
     */
    #[JsonProperty('donationCarryforward')]
    public ?string $donationCarryforward;

    /**
     * @var ?string $contributionAccountOpening
     */
    #[JsonProperty('contributionAccountOpening')]
    public ?string $contributionAccountOpening;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsContributionsItem> $contributions
     */
    #[JsonProperty('contributions'), ArrayType([PostV1DeclarationsDeReturnFactsGetResponseFactsContributionsItem::class])]
    public ?array $contributions;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsDistributionsItem> $distributions
     */
    #[JsonProperty('distributions'), ArrayType([PostV1DeclarationsDeReturnFactsGetResponseFactsDistributionsItem::class])]
    public ?array $distributions;

    /**
     * @var ?string $taxBalanceEquity
     */
    #[JsonProperty('taxBalanceEquity')]
    public ?string $taxBalanceEquity;

    /**
     * @var ?bool $multipleMunicipalities
     */
    #[JsonProperty('multipleMunicipalities')]
    public ?bool $multipleMunicipalities;

    /**
     * @var ?PostV1DeclarationsDeReturnFactsGetResponseFactsRelocation $relocation
     */
    #[JsonProperty('relocation')]
    public ?PostV1DeclarationsDeReturnFactsGetResponseFactsRelocation $relocation;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsMunicipalitiesItem> $municipalities
     */
    #[JsonProperty('municipalities'), ArrayType([PostV1DeclarationsDeReturnFactsGetResponseFactsMunicipalitiesItem::class])]
    public ?array $municipalities;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsLandHoldingsItem> $landHoldings
     */
    #[JsonProperty('landHoldings'), ArrayType([PostV1DeclarationsDeReturnFactsGetResponseFactsLandHoldingsItem::class])]
    public ?array $landHoldings;

    /**
     * @var ?string $propertyTaxExpense
     */
    #[JsonProperty('propertyTaxExpense')]
    public ?string $propertyTaxExpense;

    /**
     * @var ?string $licencesToNonResidents
     */
    #[JsonProperty('licencesToNonResidents')]
    public ?string $licencesToNonResidents;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsParticipationsItem> $participations
     */
    #[JsonProperty('participations'), ArrayType([PostV1DeclarationsDeReturnFactsGetResponseFactsParticipationsItem::class])]
    public ?array $participations;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsForeignIncomeItem> $foreignIncome
     */
    #[JsonProperty('foreignIncome'), ArrayType([PostV1DeclarationsDeReturnFactsGetResponseFactsForeignIncomeItem::class])]
    public ?array $foreignIncome;

    /**
     * @var ?string $smallBusinessSwitchDate
     */
    #[JsonProperty('smallBusinessSwitchDate')]
    public ?string $smallBusinessSwitchDate;

    /**
     * @var ?bool $refundProcedureApplied
     */
    #[JsonProperty('refundProcedureApplied')]
    public ?bool $refundProcedureApplied;

    /**
     * @var ?string $bic
     */
    #[JsonProperty('bic')]
    public ?string $bic;

    /**
     * @var ?PostV1DeclarationsDeReturnFactsGetResponseFactsRepresentative $representative
     */
    #[JsonProperty('representative')]
    public ?PostV1DeclarationsDeReturnFactsGetResponseFactsRepresentative $representative;

    /**
     * @var ?string $singleTransportTax
     */
    #[JsonProperty('singleTransportTax')]
    public ?string $singleTransportTax;

    /**
     * @var ?string $distanceSales
     */
    #[JsonProperty('distanceSales')]
    public ?string $distanceSales;

    /**
     * @param array{
     *   changedShareholderIds?: ?array<string>,
     *   shareholderContracts?: ?bool,
     *   contracts?: ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsContractsItem>,
     *   harmfulShareAcquisition?: ?bool,
     *   coronaAid?: ?string,
     *   lossCarryback?: ?string,
     *   donationCarryforward?: ?string,
     *   contributionAccountOpening?: ?string,
     *   contributions?: ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsContributionsItem>,
     *   distributions?: ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsDistributionsItem>,
     *   taxBalanceEquity?: ?string,
     *   multipleMunicipalities?: ?bool,
     *   relocation?: ?PostV1DeclarationsDeReturnFactsGetResponseFactsRelocation,
     *   municipalities?: ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsMunicipalitiesItem>,
     *   landHoldings?: ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsLandHoldingsItem>,
     *   propertyTaxExpense?: ?string,
     *   licencesToNonResidents?: ?string,
     *   participations?: ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsParticipationsItem>,
     *   foreignIncome?: ?array<PostV1DeclarationsDeReturnFactsGetResponseFactsForeignIncomeItem>,
     *   smallBusinessSwitchDate?: ?string,
     *   refundProcedureApplied?: ?bool,
     *   bic?: ?string,
     *   representative?: ?PostV1DeclarationsDeReturnFactsGetResponseFactsRepresentative,
     *   singleTransportTax?: ?string,
     *   distanceSales?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->changedShareholderIds = $values['changedShareholderIds'] ?? null;
        $this->shareholderContracts = $values['shareholderContracts'] ?? null;
        $this->contracts = $values['contracts'] ?? null;
        $this->harmfulShareAcquisition = $values['harmfulShareAcquisition'] ?? null;
        $this->coronaAid = $values['coronaAid'] ?? null;
        $this->lossCarryback = $values['lossCarryback'] ?? null;
        $this->donationCarryforward = $values['donationCarryforward'] ?? null;
        $this->contributionAccountOpening = $values['contributionAccountOpening'] ?? null;
        $this->contributions = $values['contributions'] ?? null;
        $this->distributions = $values['distributions'] ?? null;
        $this->taxBalanceEquity = $values['taxBalanceEquity'] ?? null;
        $this->multipleMunicipalities = $values['multipleMunicipalities'] ?? null;
        $this->relocation = $values['relocation'] ?? null;
        $this->municipalities = $values['municipalities'] ?? null;
        $this->landHoldings = $values['landHoldings'] ?? null;
        $this->propertyTaxExpense = $values['propertyTaxExpense'] ?? null;
        $this->licencesToNonResidents = $values['licencesToNonResidents'] ?? null;
        $this->participations = $values['participations'] ?? null;
        $this->foreignIncome = $values['foreignIncome'] ?? null;
        $this->smallBusinessSwitchDate = $values['smallBusinessSwitchDate'] ?? null;
        $this->refundProcedureApplied = $values['refundProcedureApplied'] ?? null;
        $this->bic = $values['bic'] ?? null;
        $this->representative = $values['representative'] ?? null;
        $this->singleTransportTax = $values['singleTransportTax'] ?? null;
        $this->distanceSales = $values['distanceSales'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
