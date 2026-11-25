<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Union;

class InvoicesCreateSalesRequestLinesItem extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var (
     *    float
     *   |string
     * )|null $quantity
     */
    #[JsonProperty('quantity'), Union('float', 'string', 'null')]
    public float|string|null $quantity;

    /**
     * @var ?string $unitPriceExclVat
     */
    #[JsonProperty('unitPriceExclVat')]
    public ?string $unitPriceExclVat;

    /**
     * @var ?string $unitPriceInclVat
     */
    #[JsonProperty('unitPriceInclVat')]
    public ?string $unitPriceInclVat;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @var ?string $vatClassifierCode
     */
    #[JsonProperty('vatClassifierCode')]
    public ?string $vatClassifierCode;

    /**
     * @var ?string $costCenterId
     */
    #[JsonProperty('costCenterId')]
    public ?string $costCenterId;

    /**
     * @var ?string $projectId
     */
    #[JsonProperty('projectId')]
    public ?string $projectId;

    /**
     * @var ?InvoicesCreateSalesRequestLinesItemRecognition $recognition
     */
    #[JsonProperty('recognition')]
    public ?InvoicesCreateSalesRequestLinesItemRecognition $recognition;

    /**
     * @var ?string $assetId A fixed asset sold on this line: the line net is booked to the assets.disposalProceeds posting rule account and `assets/assets/dispose` takes the proceeds from the issued invoice. Only on an invoice (422), only for an asset that is not disposed, and not with revenue recognition over time.
     */
    #[JsonProperty('assetId')]
    public ?string $assetId;

    /**
     * @var ?string $vatExemptionBasis
     */
    #[JsonProperty('vatExemptionBasis')]
    public ?string $vatExemptionBasis;

    /**
     * @var ?string $accountCode The revenue account the line is credited to at issue, a postable account of the company's chart (422 otherwise); without it the operation type's income account, else the item's sale account, else the services revenue posting rule account for a service item or a line without an item and the products revenue posting rule account for a product item. A line that sells a fixed asset always goes to `assets.disposalProceeds`.
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

    /**
     * @var ?string $standaloneSellingPrice
     */
    #[JsonProperty('standaloneSellingPrice')]
    public ?string $standaloneSellingPrice;

    /**
     * @var ?string $refundEstimatePercent
     */
    #[JsonProperty('refundEstimatePercent')]
    public ?string $refundEstimatePercent;

    /**
     * @param array{
     *   itemId?: ?string,
     *   description?: ?string,
     *   unit?: ?string,
     *   quantity?: (
     *    float
     *   |string
     * )|null,
     *   unitPriceExclVat?: ?string,
     *   unitPriceInclVat?: ?string,
     *   vatRatePercent?: ?string,
     *   vatClassifierCode?: ?string,
     *   costCenterId?: ?string,
     *   projectId?: ?string,
     *   recognition?: ?InvoicesCreateSalesRequestLinesItemRecognition,
     *   assetId?: ?string,
     *   vatExemptionBasis?: ?string,
     *   accountCode?: ?string,
     *   standaloneSellingPrice?: ?string,
     *   refundEstimatePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->unitPriceExclVat = $values['unitPriceExclVat'] ?? null;
        $this->unitPriceInclVat = $values['unitPriceInclVat'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
        $this->vatClassifierCode = $values['vatClassifierCode'] ?? null;
        $this->costCenterId = $values['costCenterId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->recognition = $values['recognition'] ?? null;
        $this->assetId = $values['assetId'] ?? null;
        $this->vatExemptionBasis = $values['vatExemptionBasis'] ?? null;
        $this->accountCode = $values['accountCode'] ?? null;
        $this->standaloneSellingPrice = $values['standaloneSellingPrice'] ?? null;
        $this->refundEstimatePercent = $values['refundEstimatePercent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
