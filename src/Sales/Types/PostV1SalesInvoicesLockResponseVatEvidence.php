<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesLockResponseVatEvidence extends JsonSerializableType
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
     * @var PostV1SalesInvoicesLockResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public PostV1SalesInvoicesLockResponseVatEvidenceScheme $scheme;

    /**
     * @var PostV1SalesInvoicesLockResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public PostV1SalesInvoicesLockResponseVatEvidencePartner $partner;

    /**
     * @var ?PostV1SalesInvoicesLockResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?PostV1SalesInvoicesLockResponseVatEvidenceVies $vies;

    /**
     * @var PostV1SalesInvoicesLockResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public PostV1SalesInvoicesLockResponseVatEvidenceLocation $location;

    /**
     * @var ?PostV1SalesInvoicesLockResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?PostV1SalesInvoicesLockResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<PostV1SalesInvoicesLockResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([PostV1SalesInvoicesLockResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: string,
     *   issueDate: string,
     *   scheme: PostV1SalesInvoicesLockResponseVatEvidenceScheme,
     *   partner: PostV1SalesInvoicesLockResponseVatEvidencePartner,
     *   location: PostV1SalesInvoicesLockResponseVatEvidenceLocation,
     *   rates: array<PostV1SalesInvoicesLockResponseVatEvidenceRatesItem>,
     *   vies?: ?PostV1SalesInvoicesLockResponseVatEvidenceVies,
     *   rateTable?: ?PostV1SalesInvoicesLockResponseVatEvidenceRateTable,
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
