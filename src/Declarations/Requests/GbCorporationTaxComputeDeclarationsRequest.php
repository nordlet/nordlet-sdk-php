<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class GbCorporationTaxComputeDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var DateTime $periodStart
     */
    #[JsonProperty('periodStart'), Date(Date::TYPE_DATE)]
    public DateTime $periodStart;

    /**
     * @var DateTime $periodEnd
     */
    #[JsonProperty('periodEnd'), Date(Date::TYPE_DATE)]
    public DateTime $periodEnd;

    /**
     * @var string $taxableTotalProfits
     */
    #[JsonProperty('taxableTotalProfits')]
    public string $taxableTotalProfits;

    /**
     * @var ?string $exemptDistributions
     */
    #[JsonProperty('exemptDistributions')]
    public ?string $exemptDistributions;

    /**
     * @var ?int $associatedCompanies
     */
    #[JsonProperty('associatedCompanies')]
    public ?int $associatedCompanies;

    /**
     * @var ?bool $closeInvestmentHolding
     */
    #[JsonProperty('closeInvestmentHolding')]
    public ?bool $closeInvestmentHolding;

    /**
     * @param array{
     *   periodStart: DateTime,
     *   periodEnd: DateTime,
     *   taxableTotalProfits: string,
     *   exemptDistributions?: ?string,
     *   associatedCompanies?: ?int,
     *   closeInvestmentHolding?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->taxableTotalProfits = $values['taxableTotalProfits'];
        $this->exemptDistributions = $values['exemptDistributions'] ?? null;
        $this->associatedCompanies = $values['associatedCompanies'] ?? null;
        $this->closeInvestmentHolding = $values['closeInvestmentHolding'] ?? null;
    }
}
