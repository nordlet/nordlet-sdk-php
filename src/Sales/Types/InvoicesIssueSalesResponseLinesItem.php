<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesIssueSalesResponseLinesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

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
     * @var string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public string $vatRatePercent;

    /**
     * @var ?string $vatClassifierCode
     */
    #[JsonProperty('vatClassifierCode')]
    public ?string $vatClassifierCode;

    /**
     * @var ?string $vatExemptionBasis
     */
    #[JsonProperty('vatExemptionBasis')]
    public ?string $vatExemptionBasis;

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
     * @var string $lineNet
     */
    #[JsonProperty('lineNet')]
    public string $lineNet;

    /**
     * @var string $lineVat
     */
    #[JsonProperty('lineVat')]
    public string $lineVat;

    /**
     * @var string $lineGross
     */
    #[JsonProperty('lineGross')]
    public string $lineGross;

    /**
     * @var int $sortOrder
     */
    #[JsonProperty('sortOrder')]
    public int $sortOrder;

    /**
     * @var value-of<InvoicesIssueSalesResponseLinesItemRecognitionMethod> $recognitionMethod
     */
    #[JsonProperty('recognitionMethod')]
    public string $recognitionMethod;

    /**
     * @var ?DateTime $recognitionStartDate
     */
    #[JsonProperty('recognitionStartDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $recognitionStartDate;

    /**
     * @var ?DateTime $recognitionEndDate
     */
    #[JsonProperty('recognitionEndDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $recognitionEndDate;

    /**
     * @var ?array<InvoicesIssueSalesResponseLinesItemRecognitionMilestonesItem> $recognitionMilestones
     */
    #[JsonProperty('recognitionMilestones'), ArrayType([InvoicesIssueSalesResponseLinesItemRecognitionMilestonesItem::class])]
    public ?array $recognitionMilestones;

    /**
     * @var ?string $standaloneSellingPrice
     */
    #[JsonProperty('standaloneSellingPrice')]
    public ?string $standaloneSellingPrice;

    /**
     * @var ?string $allocatedNet
     */
    #[JsonProperty('allocatedNet')]
    public ?string $allocatedNet;

    /**
     * @var ?string $refundEstimatePercent
     */
    #[JsonProperty('refundEstimatePercent')]
    public ?string $refundEstimatePercent;

    /**
     * @param array{
     *   id: string,
     *   description: string,
     *   unit: string,
     *   quantity: string,
     *   vatRatePercent: string,
     *   lineNet: string,
     *   lineVat: string,
     *   lineGross: string,
     *   sortOrder: int,
     *   recognitionMethod: value-of<InvoicesIssueSalesResponseLinesItemRecognitionMethod>,
     *   itemId?: ?string,
     *   unitPriceExclVat?: ?string,
     *   unitPriceInclVat?: ?string,
     *   vatClassifierCode?: ?string,
     *   vatExemptionBasis?: ?string,
     *   costCenterId?: ?string,
     *   projectId?: ?string,
     *   recognitionStartDate?: ?DateTime,
     *   recognitionEndDate?: ?DateTime,
     *   recognitionMilestones?: ?array<InvoicesIssueSalesResponseLinesItemRecognitionMilestonesItem>,
     *   standaloneSellingPrice?: ?string,
     *   allocatedNet?: ?string,
     *   refundEstimatePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'];
        $this->unit = $values['unit'];
        $this->quantity = $values['quantity'];
        $this->unitPriceExclVat = $values['unitPriceExclVat'] ?? null;
        $this->unitPriceInclVat = $values['unitPriceInclVat'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'];
        $this->vatClassifierCode = $values['vatClassifierCode'] ?? null;
        $this->vatExemptionBasis = $values['vatExemptionBasis'] ?? null;
        $this->costCenterId = $values['costCenterId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->lineNet = $values['lineNet'];
        $this->lineVat = $values['lineVat'];
        $this->lineGross = $values['lineGross'];
        $this->sortOrder = $values['sortOrder'];
        $this->recognitionMethod = $values['recognitionMethod'];
        $this->recognitionStartDate = $values['recognitionStartDate'] ?? null;
        $this->recognitionEndDate = $values['recognitionEndDate'] ?? null;
        $this->recognitionMilestones = $values['recognitionMilestones'] ?? null;
        $this->standaloneSellingPrice = $values['standaloneSellingPrice'] ?? null;
        $this->allocatedNet = $values['allocatedNet'] ?? null;
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
