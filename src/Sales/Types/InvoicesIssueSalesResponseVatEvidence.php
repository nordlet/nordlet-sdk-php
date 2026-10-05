<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesIssueSalesResponseVatEvidence extends JsonSerializableType
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
     * @var InvoicesIssueSalesResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public InvoicesIssueSalesResponseVatEvidenceScheme $scheme;

    /**
     * @var InvoicesIssueSalesResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public InvoicesIssueSalesResponseVatEvidencePartner $partner;

    /**
     * @var ?InvoicesIssueSalesResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?InvoicesIssueSalesResponseVatEvidenceVies $vies;

    /**
     * @var InvoicesIssueSalesResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public InvoicesIssueSalesResponseVatEvidenceLocation $location;

    /**
     * @var ?InvoicesIssueSalesResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?InvoicesIssueSalesResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<InvoicesIssueSalesResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([InvoicesIssueSalesResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: DateTime,
     *   issueDate: DateTime,
     *   scheme: InvoicesIssueSalesResponseVatEvidenceScheme,
     *   partner: InvoicesIssueSalesResponseVatEvidencePartner,
     *   location: InvoicesIssueSalesResponseVatEvidenceLocation,
     *   rates: array<InvoicesIssueSalesResponseVatEvidenceRatesItem>,
     *   vies?: ?InvoicesIssueSalesResponseVatEvidenceVies,
     *   rateTable?: ?InvoicesIssueSalesResponseVatEvidenceRateTable,
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
