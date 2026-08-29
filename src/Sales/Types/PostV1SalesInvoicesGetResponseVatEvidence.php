<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesGetResponseVatEvidence extends JsonSerializableType
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
     * @var PostV1SalesInvoicesGetResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public PostV1SalesInvoicesGetResponseVatEvidenceScheme $scheme;

    /**
     * @var PostV1SalesInvoicesGetResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public PostV1SalesInvoicesGetResponseVatEvidencePartner $partner;

    /**
     * @var ?PostV1SalesInvoicesGetResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?PostV1SalesInvoicesGetResponseVatEvidenceVies $vies;

    /**
     * @var PostV1SalesInvoicesGetResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public PostV1SalesInvoicesGetResponseVatEvidenceLocation $location;

    /**
     * @var ?PostV1SalesInvoicesGetResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?PostV1SalesInvoicesGetResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<PostV1SalesInvoicesGetResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([PostV1SalesInvoicesGetResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: string,
     *   issueDate: string,
     *   scheme: PostV1SalesInvoicesGetResponseVatEvidenceScheme,
     *   partner: PostV1SalesInvoicesGetResponseVatEvidencePartner,
     *   location: PostV1SalesInvoicesGetResponseVatEvidenceLocation,
     *   rates: array<PostV1SalesInvoicesGetResponseVatEvidenceRatesItem>,
     *   vies?: ?PostV1SalesInvoicesGetResponseVatEvidenceVies,
     *   rateTable?: ?PostV1SalesInvoicesGetResponseVatEvidenceRateTable,
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
