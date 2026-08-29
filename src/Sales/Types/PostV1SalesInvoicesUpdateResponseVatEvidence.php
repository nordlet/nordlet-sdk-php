<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesUpdateResponseVatEvidence extends JsonSerializableType
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
     * @var PostV1SalesInvoicesUpdateResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public PostV1SalesInvoicesUpdateResponseVatEvidenceScheme $scheme;

    /**
     * @var PostV1SalesInvoicesUpdateResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public PostV1SalesInvoicesUpdateResponseVatEvidencePartner $partner;

    /**
     * @var ?PostV1SalesInvoicesUpdateResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?PostV1SalesInvoicesUpdateResponseVatEvidenceVies $vies;

    /**
     * @var PostV1SalesInvoicesUpdateResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public PostV1SalesInvoicesUpdateResponseVatEvidenceLocation $location;

    /**
     * @var ?PostV1SalesInvoicesUpdateResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?PostV1SalesInvoicesUpdateResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<PostV1SalesInvoicesUpdateResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([PostV1SalesInvoicesUpdateResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: string,
     *   issueDate: string,
     *   scheme: PostV1SalesInvoicesUpdateResponseVatEvidenceScheme,
     *   partner: PostV1SalesInvoicesUpdateResponseVatEvidencePartner,
     *   location: PostV1SalesInvoicesUpdateResponseVatEvidenceLocation,
     *   rates: array<PostV1SalesInvoicesUpdateResponseVatEvidenceRatesItem>,
     *   vies?: ?PostV1SalesInvoicesUpdateResponseVatEvidenceVies,
     *   rateTable?: ?PostV1SalesInvoicesUpdateResponseVatEvidenceRateTable,
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
