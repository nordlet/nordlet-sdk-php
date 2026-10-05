<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesCreateSalesResponseVatEvidence extends JsonSerializableType
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
     * @var InvoicesCreateSalesResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public InvoicesCreateSalesResponseVatEvidenceScheme $scheme;

    /**
     * @var InvoicesCreateSalesResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public InvoicesCreateSalesResponseVatEvidencePartner $partner;

    /**
     * @var ?InvoicesCreateSalesResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?InvoicesCreateSalesResponseVatEvidenceVies $vies;

    /**
     * @var InvoicesCreateSalesResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public InvoicesCreateSalesResponseVatEvidenceLocation $location;

    /**
     * @var ?InvoicesCreateSalesResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?InvoicesCreateSalesResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<InvoicesCreateSalesResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([InvoicesCreateSalesResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: DateTime,
     *   issueDate: DateTime,
     *   scheme: InvoicesCreateSalesResponseVatEvidenceScheme,
     *   partner: InvoicesCreateSalesResponseVatEvidencePartner,
     *   location: InvoicesCreateSalesResponseVatEvidenceLocation,
     *   rates: array<InvoicesCreateSalesResponseVatEvidenceRatesItem>,
     *   vies?: ?InvoicesCreateSalesResponseVatEvidenceVies,
     *   rateTable?: ?InvoicesCreateSalesResponseVatEvidenceRateTable,
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
