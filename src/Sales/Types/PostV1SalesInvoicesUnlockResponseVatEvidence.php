<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesUnlockResponseVatEvidence extends JsonSerializableType
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
     * @var PostV1SalesInvoicesUnlockResponseVatEvidenceScheme $scheme
     */
    #[JsonProperty('scheme')]
    public PostV1SalesInvoicesUnlockResponseVatEvidenceScheme $scheme;

    /**
     * @var PostV1SalesInvoicesUnlockResponseVatEvidencePartner $partner
     */
    #[JsonProperty('partner')]
    public PostV1SalesInvoicesUnlockResponseVatEvidencePartner $partner;

    /**
     * @var ?PostV1SalesInvoicesUnlockResponseVatEvidenceVies $vies
     */
    #[JsonProperty('vies')]
    public ?PostV1SalesInvoicesUnlockResponseVatEvidenceVies $vies;

    /**
     * @var PostV1SalesInvoicesUnlockResponseVatEvidenceLocation $location
     */
    #[JsonProperty('location')]
    public PostV1SalesInvoicesUnlockResponseVatEvidenceLocation $location;

    /**
     * @var ?PostV1SalesInvoicesUnlockResponseVatEvidenceRateTable $rateTable
     */
    #[JsonProperty('rateTable')]
    public ?PostV1SalesInvoicesUnlockResponseVatEvidenceRateTable $rateTable;

    /**
     * @var array<PostV1SalesInvoicesUnlockResponseVatEvidenceRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([PostV1SalesInvoicesUnlockResponseVatEvidenceRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   capturedAt: string,
     *   issueDate: string,
     *   scheme: PostV1SalesInvoicesUnlockResponseVatEvidenceScheme,
     *   partner: PostV1SalesInvoicesUnlockResponseVatEvidencePartner,
     *   location: PostV1SalesInvoicesUnlockResponseVatEvidenceLocation,
     *   rates: array<PostV1SalesInvoicesUnlockResponseVatEvidenceRatesItem>,
     *   vies?: ?PostV1SalesInvoicesUnlockResponseVatEvidenceVies,
     *   rateTable?: ?PostV1SalesInvoicesUnlockResponseVatEvidenceRateTable,
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
