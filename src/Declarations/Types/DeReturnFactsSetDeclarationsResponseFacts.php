<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class DeReturnFactsSetDeclarationsResponseFacts extends JsonSerializableType
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
     * @var ?array<DeReturnFactsSetDeclarationsResponseFactsContractsItem> $contracts
     */
    #[JsonProperty('contracts'), ArrayType([DeReturnFactsSetDeclarationsResponseFactsContractsItem::class])]
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
     * @var ?array<DeReturnFactsSetDeclarationsResponseFactsContributionsItem> $contributions
     */
    #[JsonProperty('contributions'), ArrayType([DeReturnFactsSetDeclarationsResponseFactsContributionsItem::class])]
    public ?array $contributions;

    /**
     * @var ?array<DeReturnFactsSetDeclarationsResponseFactsDistributionsItem> $distributions
     */
    #[JsonProperty('distributions'), ArrayType([DeReturnFactsSetDeclarationsResponseFactsDistributionsItem::class])]
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
     * @var ?DeReturnFactsSetDeclarationsResponseFactsRelocation $relocation
     */
    #[JsonProperty('relocation')]
    public ?DeReturnFactsSetDeclarationsResponseFactsRelocation $relocation;

    /**
     * @var ?array<DeReturnFactsSetDeclarationsResponseFactsMunicipalitiesItem> $municipalities
     */
    #[JsonProperty('municipalities'), ArrayType([DeReturnFactsSetDeclarationsResponseFactsMunicipalitiesItem::class])]
    public ?array $municipalities;

    /**
     * @var ?array<DeReturnFactsSetDeclarationsResponseFactsLandHoldingsItem> $landHoldings
     */
    #[JsonProperty('landHoldings'), ArrayType([DeReturnFactsSetDeclarationsResponseFactsLandHoldingsItem::class])]
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
     * @var ?array<DeReturnFactsSetDeclarationsResponseFactsParticipationsItem> $participations
     */
    #[JsonProperty('participations'), ArrayType([DeReturnFactsSetDeclarationsResponseFactsParticipationsItem::class])]
    public ?array $participations;

    /**
     * @var ?array<DeReturnFactsSetDeclarationsResponseFactsForeignIncomeItem> $foreignIncome
     */
    #[JsonProperty('foreignIncome'), ArrayType([DeReturnFactsSetDeclarationsResponseFactsForeignIncomeItem::class])]
    public ?array $foreignIncome;

    /**
     * @var ?DateTime $smallBusinessSwitchDate
     */
    #[JsonProperty('smallBusinessSwitchDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $smallBusinessSwitchDate;

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
     * @var ?DeReturnFactsSetDeclarationsResponseFactsRepresentative $representative
     */
    #[JsonProperty('representative')]
    public ?DeReturnFactsSetDeclarationsResponseFactsRepresentative $representative;

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
     *   contracts?: ?array<DeReturnFactsSetDeclarationsResponseFactsContractsItem>,
     *   harmfulShareAcquisition?: ?bool,
     *   coronaAid?: ?string,
     *   lossCarryback?: ?string,
     *   donationCarryforward?: ?string,
     *   contributionAccountOpening?: ?string,
     *   contributions?: ?array<DeReturnFactsSetDeclarationsResponseFactsContributionsItem>,
     *   distributions?: ?array<DeReturnFactsSetDeclarationsResponseFactsDistributionsItem>,
     *   taxBalanceEquity?: ?string,
     *   multipleMunicipalities?: ?bool,
     *   relocation?: ?DeReturnFactsSetDeclarationsResponseFactsRelocation,
     *   municipalities?: ?array<DeReturnFactsSetDeclarationsResponseFactsMunicipalitiesItem>,
     *   landHoldings?: ?array<DeReturnFactsSetDeclarationsResponseFactsLandHoldingsItem>,
     *   propertyTaxExpense?: ?string,
     *   licencesToNonResidents?: ?string,
     *   participations?: ?array<DeReturnFactsSetDeclarationsResponseFactsParticipationsItem>,
     *   foreignIncome?: ?array<DeReturnFactsSetDeclarationsResponseFactsForeignIncomeItem>,
     *   smallBusinessSwitchDate?: ?DateTime,
     *   refundProcedureApplied?: ?bool,
     *   bic?: ?string,
     *   representative?: ?DeReturnFactsSetDeclarationsResponseFactsRepresentative,
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
