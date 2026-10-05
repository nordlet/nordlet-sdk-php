<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesLockSalesResponseVatEvidence extends JsonSerializableType
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
     * @var InvoicesLockSalesResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public InvoicesLockSalesResponseVatEvidenceScheme $scheme;

    /**
     * @var InvoicesLockSalesResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public InvoicesLockSalesResponseVatEvidencePartner $partner;

    /**
     * @var ?InvoicesLockSalesResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?InvoicesLockSalesResponseVatEvidenceVies $vies;

    /**
     * @var InvoicesLockSalesResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public InvoicesLockSalesResponseVatEvidenceLocation $location;

    /**
     * @var ?InvoicesLockSalesResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?InvoicesLockSalesResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<InvoicesLockSalesResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([InvoicesLockSalesResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: DateTime,
     *   issueDate: DateTime,
     *   scheme: InvoicesLockSalesResponseVatEvidenceScheme,
     *   partner: InvoicesLockSalesResponseVatEvidencePartner,
     *   location: InvoicesLockSalesResponseVatEvidenceLocation,
     *   rates: array<InvoicesLockSalesResponseVatEvidenceRatesItem>,
     *   vies?: ?InvoicesLockSalesResponseVatEvidenceVies,
     *   rateTable?: ?InvoicesLockSalesResponseVatEvidenceRateTable,
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
