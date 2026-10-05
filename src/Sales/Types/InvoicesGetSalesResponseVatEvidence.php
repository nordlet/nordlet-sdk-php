<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesGetSalesResponseVatEvidence extends JsonSerializableType
{
    /**
     * @var DateTime $capturedAt
     */
    #[JsonProperty('capturedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $capturedAt;

    /**
     * @var DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public DateTime $issueDate;

    /**
     * @var InvoicesGetSalesResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public InvoicesGetSalesResponseVatEvidenceScheme $scheme;

    /**
     * @var InvoicesGetSalesResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public InvoicesGetSalesResponseVatEvidencePartner $partner;

    /**
     * @var ?InvoicesGetSalesResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?InvoicesGetSalesResponseVatEvidenceVies $vies;

    /**
     * @var InvoicesGetSalesResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public InvoicesGetSalesResponseVatEvidenceLocation $location;

    /**
     * @var ?InvoicesGetSalesResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?InvoicesGetSalesResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<InvoicesGetSalesResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([InvoicesGetSalesResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: DateTime,
     *   issueDate: DateTime,
     *   scheme: InvoicesGetSalesResponseVatEvidenceScheme,
     *   partner: InvoicesGetSalesResponseVatEvidencePartner,
     *   location: InvoicesGetSalesResponseVatEvidenceLocation,
     *   rates: array<InvoicesGetSalesResponseVatEvidenceRatesItem>,
     *   vies?: ?InvoicesGetSalesResponseVatEvidenceVies,
     *   rateTable?: ?InvoicesGetSalesResponseVatEvidenceRateTable,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->capturedAt = $values['capturedAt'];
        $this->issueDate = $values['issueDate'];
        $this->scheme = $values['scheme'];
        $this->partner = $values['partner'];
        $this->vies = $values['vies'] ?? null;
        $this->location = $values['location'];
        $this->rateTable = $values['rateTable'] ?? null;
        $this->rates = $values['rates'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
