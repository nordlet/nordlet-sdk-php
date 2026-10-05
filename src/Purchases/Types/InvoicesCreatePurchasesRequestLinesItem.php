<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Union;

class InvoicesCreatePurchasesRequestLinesItem extends JsonSerializableType
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
     * @var ?string $accountCode
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

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
     *   accountCode?: ?string,
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
        $this->accountCode = $values['accountCode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
