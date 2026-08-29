<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ConsolidationIntercompanyReportResponseDirectionsItem extends JsonSerializableType
{
    /**
     * @var string $sellerCompanyId
     */
    #[JsonProperty('sellerCompanyId')]
    public string $sellerCompanyId;

    /**
     * @var string $sellerName
     */
    #[JsonProperty('sellerName')]
    public string $sellerName;

    /**
     * @var string $buyerCompanyId
     */
    #[JsonProperty('buyerCompanyId')]
    public string $buyerCompanyId;

    /**
     * @var string $buyerName
     */
    #[JsonProperty('buyerName')]
    public string $buyerName;

    /**
     * @var array<PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItem::class])]
    public array $documents;

    /**
     * @var array<PostV1ConsolidationIntercompanyReportResponseDirectionsItemUnmatchedPurchasesItem> $unmatchedPurchases
     */
    #[JsonProperty('unmatchedPurchases'), ArrayType([PostV1ConsolidationIntercompanyReportResponseDirectionsItemUnmatchedPurchasesItem::class])]
    public array $unmatchedPurchases;

    /**
     * @var array<PostV1ConsolidationIntercompanyReportResponseDirectionsItemTotalsItem> $totals
     */
    #[JsonProperty('totals'), ArrayType([PostV1ConsolidationIntercompanyReportResponseDirectionsItemTotalsItem::class])]
    public array $totals;

    /**
     * @param array{
     *   sellerCompanyId: string,
     *   sellerName: string,
     *   buyerCompanyId: string,
     *   buyerName: string,
     *   documents: array<PostV1ConsolidationIntercompanyReportResponseDirectionsItemDocumentsItem>,
     *   unmatchedPurchases: array<PostV1ConsolidationIntercompanyReportResponseDirectionsItemUnmatchedPurchasesItem>,
     *   totals: array<PostV1ConsolidationIntercompanyReportResponseDirectionsItemTotalsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sellerCompanyId = $values['sellerCompanyId'];
        $this->sellerName = $values['sellerName'];
        $this->buyerCompanyId = $values['buyerCompanyId'];
        $this->buyerName = $values['buyerName'];
        $this->documents = $values['documents'];
        $this->unmatchedPurchases = $values['unmatchedPurchases'];
        $this->totals = $values['totals'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
