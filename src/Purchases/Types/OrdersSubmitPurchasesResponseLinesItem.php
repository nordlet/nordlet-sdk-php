<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class OrdersSubmitPurchasesResponseLinesItem extends JsonSerializableType
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
     * @var string $receivedQty
     */
    #[JsonProperty('receivedQty')]
    public string $receivedQty;

    /**
     * @var string $remainingQty
     */
    #[JsonProperty('remainingQty')]
    public string $remainingQty;

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
     * @var ?string $accountCode
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

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
     * @param array{
     *   id: string,
     *   description: string,
     *   unit: string,
     *   quantity: string,
     *   receivedQty: string,
     *   remainingQty: string,
     *   vatRatePercent: string,
     *   lineNet: string,
     *   lineVat: string,
     *   lineGross: string,
     *   sortOrder: int,
     *   itemId?: ?string,
     *   unitPriceExclVat?: ?string,
     *   unitPriceInclVat?: ?string,
     *   vatClassifierCode?: ?string,
     *   costCenterId?: ?string,
     *   projectId?: ?string,
     *   accountCode?: ?string,
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
        $this->receivedQty = $values['receivedQty'];
        $this->remainingQty = $values['remainingQty'];
        $this->unitPriceExclVat = $values['unitPriceExclVat'] ?? null;
        $this->unitPriceInclVat = $values['unitPriceInclVat'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'];
        $this->vatClassifierCode = $values['vatClassifierCode'] ?? null;
        $this->costCenterId = $values['costCenterId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->accountCode = $values['accountCode'] ?? null;
        $this->lineNet = $values['lineNet'];
        $this->lineVat = $values['lineVat'];
        $this->lineGross = $values['lineGross'];
        $this->sortOrder = $values['sortOrder'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
