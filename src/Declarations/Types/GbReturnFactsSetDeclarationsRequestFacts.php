<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbReturnFactsSetDeclarationsRequestFacts extends JsonSerializableType
{
    /**
     * @var ?int $companyType
     */
    #[JsonProperty('companyType')]
    public ?int $companyType;

    /**
     * @var ?int $associatedCompanies
     */
    #[JsonProperty('associatedCompanies')]
    public ?int $associatedCompanies;

    /**
     * @var ?bool $partnerInFirm
     */
    #[JsonProperty('partnerInFirm')]
    public ?bool $partnerInFirm;

    /**
     * @var ?bool $smallCompaniesRegime
     */
    #[JsonProperty('smallCompaniesRegime')]
    public ?bool $smallCompaniesRegime;

    /**
     * @var ?bool $auditExemptionSection477
     */
    #[JsonProperty('auditExemptionSection477')]
    public ?bool $auditExemptionSection477;

    /**
     * @var ?string $depreciation
     */
    #[JsonProperty('depreciation')]
    public ?string $depreciation;

    /**
     * @var ?string $amortisation
     */
    #[JsonProperty('amortisation')]
    public ?string $amortisation;

    /**
     * @var ?string $lossOrProfitOnSale
     */
    #[JsonProperty('lossOrProfitOnSale')]
    public ?string $lossOrProfitOnSale;

    /**
     * @var ?string $entertaining
     */
    #[JsonProperty('entertaining')]
    public ?string $entertaining;

    /**
     * @var ?string $otherAdditions
     */
    #[JsonProperty('otherAdditions')]
    public ?string $otherAdditions;

    /**
     * @var ?string $nonTradingLoanCredits
     */
    #[JsonProperty('nonTradingLoanCredits')]
    public ?string $nonTradingLoanCredits;

    /**
     * @var ?string $nonTradingLoanDebits
     */
    #[JsonProperty('nonTradingLoanDebits')]
    public ?string $nonTradingLoanDebits;

    /**
     * @var ?string $nonTaxableIncome
     */
    #[JsonProperty('nonTaxableIncome')]
    public ?string $nonTaxableIncome;

    /**
     * @var ?string $exemptDistributions
     */
    #[JsonProperty('exemptDistributions')]
    public ?string $exemptDistributions;

    /**
     * @var ?GbReturnFactsSetDeclarationsRequestFactsCapitalAllowances $capitalAllowances
     */
    #[JsonProperty('capitalAllowances')]
    public ?GbReturnFactsSetDeclarationsRequestFactsCapitalAllowances $capitalAllowances;

    /**
     * @var ?GbReturnFactsSetDeclarationsRequestFactsBalancingCharges $balancingCharges
     */
    #[JsonProperty('balancingCharges')]
    public ?GbReturnFactsSetDeclarationsRequestFactsBalancingCharges $balancingCharges;

    /**
     * @var ?string $tradingLossesBroughtForward
     */
    #[JsonProperty('tradingLossesBroughtForward')]
    public ?string $tradingLossesBroughtForward;

    /**
     * @var ?string $grossChargeableGains
     */
    #[JsonProperty('grossChargeableGains')]
    public ?string $grossChargeableGains;

    /**
     * @var ?string $allowableLosses
     */
    #[JsonProperty('allowableLosses')]
    public ?string $allowableLosses;

    /**
     * @var ?string $qualifyingDonations
     */
    #[JsonProperty('qualifyingDonations')]
    public ?string $qualifyingDonations;

    /**
     * @var ?string $taxAlreadyPaid
     */
    #[JsonProperty('taxAlreadyPaid')]
    public ?string $taxAlreadyPaid;

    /**
     * @var ?string $declarantName
     */
    #[JsonProperty('declarantName')]
    public ?string $declarantName;

    /**
     * @var ?string $declarantStatus
     */
    #[JsonProperty('declarantStatus')]
    public ?string $declarantStatus;

    /**
     * @var ?string $seniorStatutoryAuditor
     */
    #[JsonProperty('seniorStatutoryAuditor')]
    public ?string $seniorStatutoryAuditor;

    /**
     * @param array{
     *   companyType?: ?int,
     *   associatedCompanies?: ?int,
     *   partnerInFirm?: ?bool,
     *   smallCompaniesRegime?: ?bool,
     *   auditExemptionSection477?: ?bool,
     *   depreciation?: ?string,
     *   amortisation?: ?string,
     *   lossOrProfitOnSale?: ?string,
     *   entertaining?: ?string,
     *   otherAdditions?: ?string,
     *   nonTradingLoanCredits?: ?string,
     *   nonTradingLoanDebits?: ?string,
     *   nonTaxableIncome?: ?string,
     *   exemptDistributions?: ?string,
     *   capitalAllowances?: ?GbReturnFactsSetDeclarationsRequestFactsCapitalAllowances,
     *   balancingCharges?: ?GbReturnFactsSetDeclarationsRequestFactsBalancingCharges,
     *   tradingLossesBroughtForward?: ?string,
     *   grossChargeableGains?: ?string,
     *   allowableLosses?: ?string,
     *   qualifyingDonations?: ?string,
     *   taxAlreadyPaid?: ?string,
     *   declarantName?: ?string,
     *   declarantStatus?: ?string,
     *   seniorStatutoryAuditor?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->companyType = $values['companyType'] ?? null;
        $this->associatedCompanies = $values['associatedCompanies'] ?? null;
        $this->partnerInFirm = $values['partnerInFirm'] ?? null;
        $this->smallCompaniesRegime = $values['smallCompaniesRegime'] ?? null;
        $this->auditExemptionSection477 = $values['auditExemptionSection477'] ?? null;
        $this->depreciation = $values['depreciation'] ?? null;
        $this->amortisation = $values['amortisation'] ?? null;
        $this->lossOrProfitOnSale = $values['lossOrProfitOnSale'] ?? null;
        $this->entertaining = $values['entertaining'] ?? null;
        $this->otherAdditions = $values['otherAdditions'] ?? null;
        $this->nonTradingLoanCredits = $values['nonTradingLoanCredits'] ?? null;
        $this->nonTradingLoanDebits = $values['nonTradingLoanDebits'] ?? null;
        $this->nonTaxableIncome = $values['nonTaxableIncome'] ?? null;
        $this->exemptDistributions = $values['exemptDistributions'] ?? null;
        $this->capitalAllowances = $values['capitalAllowances'] ?? null;
        $this->balancingCharges = $values['balancingCharges'] ?? null;
        $this->tradingLossesBroughtForward = $values['tradingLossesBroughtForward'] ?? null;
        $this->grossChargeableGains = $values['grossChargeableGains'] ?? null;
        $this->allowableLosses = $values['allowableLosses'] ?? null;
        $this->qualifyingDonations = $values['qualifyingDonations'] ?? null;
        $this->taxAlreadyPaid = $values['taxAlreadyPaid'] ?? null;
        $this->declarantName = $values['declarantName'] ?? null;
        $this->declarantStatus = $values['declarantStatus'] ?? null;
        $this->seniorStatutoryAuditor = $values['seniorStatutoryAuditor'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
