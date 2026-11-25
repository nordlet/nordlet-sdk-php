<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class AgreementsExpectedInvoicesAgreementsResponsePeriodsItem extends JsonSerializableType
{
    /**
     * @var string $periodStart
     */
    #[JsonProperty('periodStart')]
    public string $periodStart;

    /**
     * @var string $periodEnd
     */
    #[JsonProperty('periodEnd')]
    public string $periodEnd;

    /**
     * @var ?string $expectedNet
     */
    #[JsonProperty('expectedNet')]
    public ?string $expectedNet;

    /**
     * @var bool $missing
     */
    #[JsonProperty('missing')]
    public bool $missing;

    /**
     * @var array<AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItem> $purchaseInvoices
     */
    #[JsonProperty('purchaseInvoices'), ArrayType([AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItem::class])]
    public array $purchaseInvoices;

    /**
     * @param array{
     *   periodStart: string,
     *   periodEnd: string,
     *   missing: bool,
     *   purchaseInvoices: array<AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItem>,
     *   expectedNet?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periodStart = $values['periodStart'];
        $this->periodEnd = $values['periodEnd'];
        $this->expectedNet = $values['expectedNet'] ?? null;
        $this->missing = $values['missing'];
        $this->purchaseInvoices = $values['purchaseInvoices'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
