<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesApplyAdvanceResponseVatEvidence extends JsonSerializableType
{
    /**
     * @var string $capturedAt
     */
    #[JsonProperty('capturedAt')]
    public string $capturedAt;

    /**
     * @var string $issueDate
     */
    #[JsonProperty('issueDate')]
    public string $issueDate;

    /**
     * @var PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceScheme $scheme;

    /**
     * @var PostV1SalesInvoicesApplyAdvanceResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public PostV1SalesInvoicesApplyAdvanceResponseVatEvidencePartner $partner;

    /**
     * @var ?PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceVies $vies;

    /**
     * @var PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceLocation $location;

    /**
     * @var ?PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: string,
     *   issueDate: string,
     *   scheme: PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceScheme,
     *   partner: PostV1SalesInvoicesApplyAdvanceResponseVatEvidencePartner,
     *   location: PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceLocation,
     *   rates: array<PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceRatesItem>,
     *   vies?: ?PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceVies,
     *   rateTable?: ?PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceRateTable,
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
