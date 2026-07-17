<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsCostCenterItemsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $costCenterCode
     */
    #[JsonProperty('costCenterCode')]
    public string $costCenterCode;

    /**
     * @var string $costCenterName
     */
    #[JsonProperty('costCenterName')]
    public string $costCenterName;

    /**
     * @var string $itemName
     */
    #[JsonProperty('itemName')]
    public string $itemName;

    /**
     * @var string $net
     */
    #[JsonProperty('net')]
    public string $net;

    /**
     * @param array{
     *   costCenterCode: string,
     *   costCenterName: string,
     *   itemName: string,
     *   net: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->costCenterCode = $values['costCenterCode'];
        $this->costCenterName = $values['costCenterName'];
        $this->itemName = $values['itemName'];
        $this->net = $values['net'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
