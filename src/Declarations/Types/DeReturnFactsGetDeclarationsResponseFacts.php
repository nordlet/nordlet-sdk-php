<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class DeReturnFactsGetDeclarationsResponseFacts extends JsonSerializableType
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
     * @var ?array<DeReturnFactsGetDeclarationsResponseFactsContractsItem> $contracts
     */
    #[JsonProperty('contracts'), ArrayType([DeReturnFactsGetDeclarationsResponseFactsContractsItem::class])]
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
     * @var ?array<DeReturnFactsGetDeclarationsResponseFactsContributionsItem> $contributions
     */
    #[JsonProperty('contributions'), ArrayType([DeReturnFactsGetDeclarationsResponseFactsContributionsItem::class])]
    public ?array $contributions;

    /**
     * @var ?array<DeReturnFactsGetDeclarationsResponseFactsDistributionsItem> $distributions
     */
    #[JsonProperty('distributions'), ArrayType([DeReturnFactsGetDeclarationsResponseFactsDistributionsItem::class])]
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
     * @var ?DeReturnFactsGetDeclarationsResponseFactsRelocation $relocation
     */
    #[JsonProperty('relocation')]
    public ?DeReturnFactsGetDeclarationsResponseFactsRelocation $relocation;

    /**
     * @var ?array<DeReturnFactsGetDeclarationsResponseFactsMunicipalitiesItem> $municipalities
     */
    #[JsonProperty('municipalities'), ArrayType([DeReturnFactsGetDeclarationsResponseFactsMunicipalitiesItem::class])]
    public ?array $municipalities;

    /**
     * @var ?array<DeReturnFactsGetDeclarationsResponseFactsLandHoldingsItem> $landHoldings
     */
    #[JsonProperty('landHoldings'), ArrayType([DeReturnFactsGetDeclarationsResponseFactsLandHoldingsItem::class])]
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
     * @var ?array<DeReturnFactsGetDeclarationsResponseFactsParticipationsItem> $participations
     */
    #[JsonProperty('participations'), ArrayType([DeReturnFactsGetDeclarationsResponseFactsParticipationsItem::class])]
    public ?array $participations;

    /**
     * @var ?array<DeReturnFactsGetDeclarationsResponseFactsForeignIncomeItem> $foreignIncome
     */
    #[JsonProperty('foreignIncome'), ArrayType([DeReturnFactsGetDeclarationsResponseFactsForeignIncomeItem::class])]
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
     * @var ?DeReturnFactsGetDeclarationsResponseFactsRepresentative $representative
     */
    #[JsonProperty('representative')]
    public ?DeReturnFactsGetDeclarationsResponseFactsRepresentative $representative;

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
     *   contracts?: ?array<DeReturnFactsGetDeclarationsResponseFactsContractsItem>,
     *   harmfulShareAcquisition?: ?bool,
     *   coronaAid?: ?string,
     *   lossCarryback?: ?string,
     *   donationCarryforward?: ?string,
     *   contributionAccountOpening?: ?string,
     *   contributions?: ?array<DeReturnFactsGetDeclarationsResponseFactsContributionsItem>,
     *   distributions?: ?array<DeReturnFactsGetDeclarationsResponseFactsDistributionsItem>,
     *   taxBalanceEquity?: ?string,
     *   multipleMunicipalities?: ?bool,
     *   relocation?: ?DeReturnFactsGetDeclarationsResponseFactsRelocation,
     *   municipalities?: ?array<DeReturnFactsGetDeclarationsResponseFactsMunicipalitiesItem>,
     *   landHoldings?: ?array<DeReturnFactsGetDeclarationsResponseFactsLandHoldingsItem>,
     *   propertyTaxExpense?: ?string,
     *   licencesToNonResidents?: ?string,
     *   participations?: ?array<DeReturnFactsGetDeclarationsResponseFactsParticipationsItem>,
     *   foreignIncome?: ?array<DeReturnFactsGetDeclarationsResponseFactsForeignIncomeItem>,
     *   smallBusinessSwitchDate?: ?DateTime,
     *   refundProcedureApplied?: ?bool,
     *   bic?: ?string,
     *   representative?: ?DeReturnFactsGetDeclarationsResponseFactsRepresentative,
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
