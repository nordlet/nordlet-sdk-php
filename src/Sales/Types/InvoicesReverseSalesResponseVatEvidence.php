<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesReverseSalesResponseVatEvidence extends JsonSerializableType
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
     * @var InvoicesReverseSalesResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public InvoicesReverseSalesResponseVatEvidenceScheme $scheme;

    /**
     * @var InvoicesReverseSalesResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public InvoicesReverseSalesResponseVatEvidencePartner $partner;

    /**
     * @var ?InvoicesReverseSalesResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?InvoicesReverseSalesResponseVatEvidenceVies $vies;

    /**
     * @var InvoicesReverseSalesResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public InvoicesReverseSalesResponseVatEvidenceLocation $location;

    /**
     * @var ?InvoicesReverseSalesResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?InvoicesReverseSalesResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<InvoicesReverseSalesResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([InvoicesReverseSalesResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: DateTime,
     *   issueDate: DateTime,
     *   scheme: InvoicesReverseSalesResponseVatEvidenceScheme,
     *   partner: InvoicesReverseSalesResponseVatEvidencePartner,
     *   location: InvoicesReverseSalesResponseVatEvidenceLocation,
     *   rates: array<InvoicesReverseSalesResponseVatEvidenceRatesItem>,
     *   vies?: ?InvoicesReverseSalesResponseVatEvidenceVies,
     *   rateTable?: ?InvoicesReverseSalesResponseVatEvidenceRateTable,
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
