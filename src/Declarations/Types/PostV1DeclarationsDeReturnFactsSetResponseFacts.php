<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsDeReturnFactsSetResponseFacts extends JsonSerializableType
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
     * @var ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsContractsItem> $contracts
     */
    #[JsonProperty('contracts'), ArrayType([PostV1DeclarationsDeReturnFactsSetResponseFactsContractsItem::class])]
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
     * @var ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsContributionsItem> $contributions
     */
    #[JsonProperty('contributions'), ArrayType([PostV1DeclarationsDeReturnFactsSetResponseFactsContributionsItem::class])]
    public ?array $contributions;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsDistributionsItem> $distributions
     */
    #[JsonProperty('distributions'), ArrayType([PostV1DeclarationsDeReturnFactsSetResponseFactsDistributionsItem::class])]
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
     * @var ?PostV1DeclarationsDeReturnFactsSetResponseFactsRelocation $relocation
     */
    #[JsonProperty('relocation')]
    public ?PostV1DeclarationsDeReturnFactsSetResponseFactsRelocation $relocation;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsMunicipalitiesItem> $municipalities
     */
    #[JsonProperty('municipalities'), ArrayType([PostV1DeclarationsDeReturnFactsSetResponseFactsMunicipalitiesItem::class])]
    public ?array $municipalities;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsLandHoldingsItem> $landHoldings
     */
    #[JsonProperty('landHoldings'), ArrayType([PostV1DeclarationsDeReturnFactsSetResponseFactsLandHoldingsItem::class])]
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
     * @var ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsParticipationsItem> $participations
     */
    #[JsonProperty('participations'), ArrayType([PostV1DeclarationsDeReturnFactsSetResponseFactsParticipationsItem::class])]
    public ?array $participations;

    /**
     * @var ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsForeignIncomeItem> $foreignIncome
     */
    #[JsonProperty('foreignIncome'), ArrayType([PostV1DeclarationsDeReturnFactsSetResponseFactsForeignIncomeItem::class])]
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
     * @var ?PostV1DeclarationsDeReturnFactsSetResponseFactsRepresentative $representative
     */
    #[JsonProperty('representative')]
    public ?PostV1DeclarationsDeReturnFactsSetResponseFactsRepresentative $representative;

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
     *   contracts?: ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsContractsItem>,
     *   harmfulShareAcquisition?: ?bool,
     *   coronaAid?: ?string,
     *   lossCarryback?: ?string,
     *   donationCarryforward?: ?string,
     *   contributionAccountOpening?: ?string,
     *   contributions?: ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsContributionsItem>,
     *   distributions?: ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsDistributionsItem>,
     *   taxBalanceEquity?: ?string,
     *   multipleMunicipalities?: ?bool,
     *   relocation?: ?PostV1DeclarationsDeReturnFactsSetResponseFactsRelocation,
     *   municipalities?: ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsMunicipalitiesItem>,
     *   landHoldings?: ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsLandHoldingsItem>,
     *   propertyTaxExpense?: ?string,
     *   licencesToNonResidents?: ?string,
     *   participations?: ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsParticipationsItem>,
     *   foreignIncome?: ?array<PostV1DeclarationsDeReturnFactsSetResponseFactsForeignIncomeItem>,
     *   smallBusinessSwitchDate?: ?string,
     *   refundProcedureApplied?: ?bool,
     *   bic?: ?string,
     *   representative?: ?PostV1DeclarationsDeReturnFactsSetResponseFactsRepresentative,
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
