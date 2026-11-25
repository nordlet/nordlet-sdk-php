<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EeTsdAnnexesSetDeclarationsRequestAnnex6 extends JsonSerializableType
{
    /**
     * @var ?array<EeTsdAnnexesSetDeclarationsRequestAnnex6RelatedPartiesItem> $relatedParties Part II rows; their sum is 6000
     */
    #[JsonProperty('relatedParties'), ArrayType([EeTsdAnnexesSetDeclarationsRequestAnnex6RelatedPartiesItem::class])]
    public ?array $relatedParties;

    /**
     * @var ?string $fines 6010: fines and penalty payments imposed by law
     */
    #[JsonProperty('fines')]
    public ?string $fines;

    /**
     * @var ?string $taxInterest 6020: interest paid under the Taxation Act
     */
    #[JsonProperty('taxInterest')]
    public ?string $taxInterest;

    /**
     * @var ?string $confiscatedProperty 6030: value of confiscated property
     */
    #[JsonProperty('confiscatedProperty')]
    public ?string $confiscatedProperty;

    /**
     * @var ?string $environmentalCharges 6040: environmental charges at the elevated rate and damage compensation
     */
    #[JsonProperty('environmentalCharges')]
    public ?string $environmentalCharges;

    /**
     * @var ?string $bribes 6050: bribes
     */
    #[JsonProperty('bribes')]
    public ?string $bribes;

    /**
     * @var ?string $membershipFees 6060: entrance and membership fees of non-profits not related to the business
     */
    #[JsonProperty('membershipFees')]
    public ?string $membershipFees;

    /**
     * @var ?string $undocumentedPayments 6070: payments without a source document meeting the requirements
     */
    #[JsonProperty('undocumentedPayments')]
    public ?string $undocumentedPayments;

    /**
     * @var ?string $nonBusinessExpenses 6080: non-business obligations, assets and services, excess borrowing costs and the other amounts of the code
     */
    #[JsonProperty('nonBusinessExpenses')]
    public ?string $nonBusinessExpenses;

    /**
     * @var ?string $lowTaxSecurities 6090: securities of a legal person in a low tax rate territory
     */
    #[JsonProperty('lowTaxSecurities')]
    public ?string $lowTaxSecurities;

    /**
     * @var ?string $lowTaxHoldings 6100: holdings in a legal person in a low tax rate territory
     */
    #[JsonProperty('lowTaxHoldings')]
    public ?string $lowTaxHoldings;

    /**
     * @var ?string $lowTaxPenalties 6110: penalties and damages paid to such a legal person
     */
    #[JsonProperty('lowTaxPenalties')]
    public ?string $lowTaxPenalties;

    /**
     * @var ?string $lowTaxLoans 6120: loans, prepayments and claims against such a legal person
     */
    #[JsonProperty('lowTaxLoans')]
    public ?string $lowTaxLoans;

    /**
     * @var ?string $creditInstitutionLosses 6130: credit institutions only
     */
    #[JsonProperty('creditInstitutionLosses')]
    public ?string $creditInstitutionLosses;

    /**
     * @var ?array<EeTsdAnnexesSetDeclarationsRequestAnnex6ReductionsItem> $reductions 6140: reductions of an amount taxed on an earlier annex 6 (TuMS § 54 lg 6)
     */
    #[JsonProperty('reductions'), ArrayType([EeTsdAnnexesSetDeclarationsRequestAnnex6ReductionsItem::class])]
    public ?array $reductions;

    /**
     * @param array{
     *   relatedParties?: ?array<EeTsdAnnexesSetDeclarationsRequestAnnex6RelatedPartiesItem>,
     *   fines?: ?string,
     *   taxInterest?: ?string,
     *   confiscatedProperty?: ?string,
     *   environmentalCharges?: ?string,
     *   bribes?: ?string,
     *   membershipFees?: ?string,
     *   undocumentedPayments?: ?string,
     *   nonBusinessExpenses?: ?string,
     *   lowTaxSecurities?: ?string,
     *   lowTaxHoldings?: ?string,
     *   lowTaxPenalties?: ?string,
     *   lowTaxLoans?: ?string,
     *   creditInstitutionLosses?: ?string,
     *   reductions?: ?array<EeTsdAnnexesSetDeclarationsRequestAnnex6ReductionsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->relatedParties = $values['relatedParties'] ?? null;
        $this->fines = $values['fines'] ?? null;
        $this->taxInterest = $values['taxInterest'] ?? null;
        $this->confiscatedProperty = $values['confiscatedProperty'] ?? null;
        $this->environmentalCharges = $values['environmentalCharges'] ?? null;
        $this->bribes = $values['bribes'] ?? null;
        $this->membershipFees = $values['membershipFees'] ?? null;
        $this->undocumentedPayments = $values['undocumentedPayments'] ?? null;
        $this->nonBusinessExpenses = $values['nonBusinessExpenses'] ?? null;
        $this->lowTaxSecurities = $values['lowTaxSecurities'] ?? null;
        $this->lowTaxHoldings = $values['lowTaxHoldings'] ?? null;
        $this->lowTaxPenalties = $values['lowTaxPenalties'] ?? null;
        $this->lowTaxLoans = $values['lowTaxLoans'] ?? null;
        $this->creditInstitutionLosses = $values['creditInstitutionLosses'] ?? null;
        $this->reductions = $values['reductions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
