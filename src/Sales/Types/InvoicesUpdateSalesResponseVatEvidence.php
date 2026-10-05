<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesUpdateSalesResponseVatEvidence extends JsonSerializableType
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
     * @var InvoicesUpdateSalesResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public InvoicesUpdateSalesResponseVatEvidenceScheme $scheme;

    /**
     * @var InvoicesUpdateSalesResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public InvoicesUpdateSalesResponseVatEvidencePartner $partner;

    /**
     * @var ?InvoicesUpdateSalesResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?InvoicesUpdateSalesResponseVatEvidenceVies $vies;

    /**
     * @var InvoicesUpdateSalesResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public InvoicesUpdateSalesResponseVatEvidenceLocation $location;

    /**
     * @var ?InvoicesUpdateSalesResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?InvoicesUpdateSalesResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<InvoicesUpdateSalesResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([InvoicesUpdateSalesResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: DateTime,
     *   issueDate: DateTime,
     *   scheme: InvoicesUpdateSalesResponseVatEvidenceScheme,
     *   partner: InvoicesUpdateSalesResponseVatEvidencePartner,
     *   location: InvoicesUpdateSalesResponseVatEvidenceLocation,
     *   rates: array<InvoicesUpdateSalesResponseVatEvidenceRatesItem>,
     *   vies?: ?InvoicesUpdateSalesResponseVatEvidenceVies,
     *   rateTable?: ?InvoicesUpdateSalesResponseVatEvidenceRateTable,
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
