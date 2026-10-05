<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StockMovementReportsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $itemId
     */
    #[JsonProperty('itemId')]
    public string $itemId;

    /**
     * @var string $itemName
     */
    #[JsonProperty('itemName')]
    public string $itemName;

    /**
     * @var string $openingQty
     */
    #[JsonProperty('openingQty')]
    public string $openingQty;

    /**
     * @var string $openingValue
     */
    #[JsonProperty('openingValue')]
    public string $openingValue;

    /**
     * @var string $inQty
     */
    #[JsonProperty('inQty')]
    public string $inQty;

    /**
     * @var string $inValue
     */
    #[JsonProperty('inValue')]
    public string $inValue;

    /**
     * @var string $outQty
     */
    #[JsonProperty('outQty')]
    public string $outQty;

    /**
     * @var string $outValue
     */
    #[JsonProperty('outValue')]
    public string $outValue;

    /**
     * @var string $closingQty
     */
    #[JsonProperty('closingQty')]
    public string $closingQty;

    /**
     * @var string $closingValue
     */
    #[JsonProperty('closingValue')]
    public string $closingValue;

    /**
     * @param array{
     *   itemId: string,
     *   itemName: string,
     *   openingQty: string,
     *   openingValue: string,
     *   inQty: string,
     *   inValue: string,
     *   outQty: string,
     *   outValue: string,
     *   closingQty: string,
     *   closingValue: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->itemName = $values['itemName'];
        $this->openingQty = $values['openingQty'];
        $this->openingValue = $values['openingValue'];
        $this->inQty = $values['inQty'];
        $this->inValue = $values['inValue'];
        $this->outQty = $values['outQty'];
        $this->outValue = $values['outValue'];
        $this->closingQty = $values['closingQty'];
        $this->closingValue = $values['closingValue'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
