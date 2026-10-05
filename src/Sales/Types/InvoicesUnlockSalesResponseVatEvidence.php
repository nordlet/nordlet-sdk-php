<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesUnlockSalesResponseVatEvidence extends JsonSerializableType
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
     * @var InvoicesUnlockSalesResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public InvoicesUnlockSalesResponseVatEvidenceScheme $scheme;

    /**
     * @var InvoicesUnlockSalesResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public InvoicesUnlockSalesResponseVatEvidencePartner $partner;

    /**
     * @var ?InvoicesUnlockSalesResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?InvoicesUnlockSalesResponseVatEvidenceVies $vies;

    /**
     * @var InvoicesUnlockSalesResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public InvoicesUnlockSalesResponseVatEvidenceLocation $location;

    /**
     * @var ?InvoicesUnlockSalesResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?InvoicesUnlockSalesResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<InvoicesUnlockSalesResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([InvoicesUnlockSalesResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: DateTime,
     *   issueDate: DateTime,
     *   scheme: InvoicesUnlockSalesResponseVatEvidenceScheme,
     *   partner: InvoicesUnlockSalesResponseVatEvidencePartner,
     *   location: InvoicesUnlockSalesResponseVatEvidenceLocation,
     *   rates: array<InvoicesUnlockSalesResponseVatEvidenceRatesItem>,
     *   vies?: ?InvoicesUnlockSalesResponseVatEvidenceVies,
     *   rateTable?: ?InvoicesUnlockSalesResponseVatEvidenceRateTable,
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
