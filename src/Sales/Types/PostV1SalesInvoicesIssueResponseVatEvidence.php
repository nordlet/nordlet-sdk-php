<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesIssueResponseVatEvidence extends JsonSerializableType
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
     * @var PostV1SalesInvoicesIssueResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public PostV1SalesInvoicesIssueResponseVatEvidenceScheme $scheme;

    /**
     * @var PostV1SalesInvoicesIssueResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public PostV1SalesInvoicesIssueResponseVatEvidencePartner $partner;

    /**
     * @var ?PostV1SalesInvoicesIssueResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?PostV1SalesInvoicesIssueResponseVatEvidenceVies $vies;

    /**
     * @var PostV1SalesInvoicesIssueResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public PostV1SalesInvoicesIssueResponseVatEvidenceLocation $location;

    /**
     * @var ?PostV1SalesInvoicesIssueResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?PostV1SalesInvoicesIssueResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<PostV1SalesInvoicesIssueResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([PostV1SalesInvoicesIssueResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: string,
     *   issueDate: string,
     *   scheme: PostV1SalesInvoicesIssueResponseVatEvidenceScheme,
     *   partner: PostV1SalesInvoicesIssueResponseVatEvidencePartner,
     *   location: PostV1SalesInvoicesIssueResponseVatEvidenceLocation,
     *   rates: array<PostV1SalesInvoicesIssueResponseVatEvidenceRatesItem>,
     *   vies?: ?PostV1SalesInvoicesIssueResponseVatEvidenceVies,
     *   rateTable?: ?PostV1SalesInvoicesIssueResponseVatEvidenceRateTable,
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
