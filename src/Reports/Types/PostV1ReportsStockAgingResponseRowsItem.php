<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsStockAgingResponseRowsItem extends JsonSerializableType
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
     * @var string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public string $warehouseId;

    /**
     * @var string $d0To30Qty
     */
    #[JsonProperty('d0to30Qty')]
    public string $d0To30Qty;

    /**
     * @var string $d0To30Value
     */
    #[JsonProperty('d0to30Value')]
    public string $d0To30Value;

    /**
     * @var string $d31To60Qty
     */
    #[JsonProperty('d31to60Qty')]
    public string $d31To60Qty;

    /**
     * @var string $d31To60Value
     */
    #[JsonProperty('d31to60Value')]
    public string $d31To60Value;

    /**
     * @var string $d61To90Qty
     */
    #[JsonProperty('d61to90Qty')]
    public string $d61To90Qty;

    /**
     * @var string $d61To90Value
     */
    #[JsonProperty('d61to90Value')]
    public string $d61To90Value;

    /**
     * @var string $over90Qty
     */
    #[JsonProperty('over90Qty')]
    public string $over90Qty;

    /**
     * @var string $over90Value
     */
    #[JsonProperty('over90Value')]
    public string $over90Value;

    /**
     * @var string $totalQty
     */
    #[JsonProperty('totalQty')]
    public string $totalQty;

    /**
     * @var string $totalValue
     */
    #[JsonProperty('totalValue')]
    public string $totalValue;

    /**
     * @param array{
     *   itemId: string,
     *   itemName: string,
     *   warehouseId: string,
     *   d0To30Qty: string,
     *   d0To30Value: string,
     *   d31To60Qty: string,
     *   d31To60Value: string,
     *   d61To90Qty: string,
     *   d61To90Value: string,
     *   over90Qty: string,
     *   over90Value: string,
     *   totalQty: string,
     *   totalValue: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemId = $values['itemId'];
        $this->itemName = $values['itemName'];
        $this->warehouseId = $values['warehouseId'];
        $this->d0To30Qty = $values['d0To30Qty'];
        $this->d0To30Value = $values['d0To30Value'];
        $this->d31To60Qty = $values['d31To60Qty'];
        $this->d31To60Value = $values['d31To60Value'];
        $this->d61To90Qty = $values['d61To90Qty'];
        $this->d61To90Value = $values['d61To90Value'];
        $this->over90Qty = $values['over90Qty'];
        $this->over90Value = $values['over90Value'];
        $this->totalQty = $values['totalQty'];
        $this->totalValue = $values['totalValue'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
