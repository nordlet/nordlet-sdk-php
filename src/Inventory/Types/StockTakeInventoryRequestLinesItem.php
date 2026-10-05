<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class StockTakeInventoryRequestLinesItem extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var ?string $barcode
     */
    #[JsonProperty('barcode')]
    public ?string $barcode;

    /**
     * @var string $countedQty
     */
    #[JsonProperty('countedQty')]
    public string $countedQty;

    /**
     * @var ?string $unitCost
     */
    #[JsonProperty('unitCost')]
    public ?string $unitCost;

    /**
     * @var ?string $lotNumber
     */
    #[JsonProperty('lotNumber')]
    public ?string $lotNumber;

    /**
     * @var ?DateTime $expiryDate
     */
    #[JsonProperty('expiryDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $expiryDate;

    /**
     * @param array{
     *   countedQty: string,
     *   itemId?: ?string,
     *   barcode?: ?string,
     *   unitCost?: ?string,
     *   lotNumber?: ?string,
     *   expiryDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->barcode = $values['barcode'] ?? null;
        $this->countedQty = $values['countedQty'];
        $this->unitCost = $values['unitCost'] ?? null;
        $this->lotNumber = $values['lotNumber'] ?? null;
        $this->expiryDate = $values['expiryDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
