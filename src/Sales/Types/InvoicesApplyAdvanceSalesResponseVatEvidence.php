<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesApplyAdvanceSalesResponseVatEvidence extends JsonSerializableType
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
     * @var InvoicesApplyAdvanceSalesResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public InvoicesApplyAdvanceSalesResponseVatEvidenceScheme $scheme;

    /**
     * @var InvoicesApplyAdvanceSalesResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public InvoicesApplyAdvanceSalesResponseVatEvidencePartner $partner;

    /**
     * @var ?InvoicesApplyAdvanceSalesResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?InvoicesApplyAdvanceSalesResponseVatEvidenceVies $vies;

    /**
     * @var InvoicesApplyAdvanceSalesResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public InvoicesApplyAdvanceSalesResponseVatEvidenceLocation $location;

    /**
     * @var ?InvoicesApplyAdvanceSalesResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?InvoicesApplyAdvanceSalesResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<InvoicesApplyAdvanceSalesResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([InvoicesApplyAdvanceSalesResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: DateTime,
     *   issueDate: DateTime,
     *   scheme: InvoicesApplyAdvanceSalesResponseVatEvidenceScheme,
     *   partner: InvoicesApplyAdvanceSalesResponseVatEvidencePartner,
     *   location: InvoicesApplyAdvanceSalesResponseVatEvidenceLocation,
     *   rates: array<InvoicesApplyAdvanceSalesResponseVatEvidenceRatesItem>,
     *   vies?: ?InvoicesApplyAdvanceSalesResponseVatEvidenceVies,
     *   rateTable?: ?InvoicesApplyAdvanceSalesResponseVatEvidenceRateTable,
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
