<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesCreateResponseVatEvidence extends JsonSerializableType
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
     * @var PostV1SalesInvoicesCreateResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public PostV1SalesInvoicesCreateResponseVatEvidenceScheme $scheme;

    /**
     * @var PostV1SalesInvoicesCreateResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public PostV1SalesInvoicesCreateResponseVatEvidencePartner $partner;

    /**
     * @var ?PostV1SalesInvoicesCreateResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?PostV1SalesInvoicesCreateResponseVatEvidenceVies $vies;

    /**
     * @var PostV1SalesInvoicesCreateResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public PostV1SalesInvoicesCreateResponseVatEvidenceLocation $location;

    /**
     * @var ?PostV1SalesInvoicesCreateResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?PostV1SalesInvoicesCreateResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<PostV1SalesInvoicesCreateResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([PostV1SalesInvoicesCreateResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: string,
     *   issueDate: string,
     *   scheme: PostV1SalesInvoicesCreateResponseVatEvidenceScheme,
     *   partner: PostV1SalesInvoicesCreateResponseVatEvidencePartner,
     *   location: PostV1SalesInvoicesCreateResponseVatEvidenceLocation,
     *   rates: array<PostV1SalesInvoicesCreateResponseVatEvidenceRatesItem>,
     *   vies?: ?PostV1SalesInvoicesCreateResponseVatEvidenceVies,
     *   rateTable?: ?PostV1SalesInvoicesCreateResponseVatEvidenceRateTable,
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
