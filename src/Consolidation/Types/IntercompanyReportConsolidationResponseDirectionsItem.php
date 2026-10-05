<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class IntercompanyReportConsolidationResponseDirectionsItem extends JsonSerializableType
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
     * @var array<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([IntercompanyReportConsolidationResponseDirectionsItemDocumentsItem::class])]
    public array $documents;

    /**
     * @var array<IntercompanyReportConsolidationResponseDirectionsItemUnmatchedPurchasesItem> $unmatchedPurchases
     */
    #[JsonProperty('unmatchedPurchases'), ArrayType([IntercompanyReportConsolidationResponseDirectionsItemUnmatchedPurchasesItem::class])]
    public array $unmatchedPurchases;

    /**
     * @var array<IntercompanyReportConsolidationResponseDirectionsItemTotalsItem> $totals
     */
    #[JsonProperty('totals'), ArrayType([IntercompanyReportConsolidationResponseDirectionsItemTotalsItem::class])]
    public array $totals;

    /**
     * @param array{
     *   sellerCompanyId: string,
     *   sellerName: string,
     *   buyerCompanyId: string,
     *   buyerName: string,
     *   documents: array<IntercompanyReportConsolidationResponseDirectionsItemDocumentsItem>,
     *   unmatchedPurchases: array<IntercompanyReportConsolidationResponseDirectionsItemUnmatchedPurchasesItem>,
     *   totals: array<IntercompanyReportConsolidationResponseDirectionsItemTotalsItem>,
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
