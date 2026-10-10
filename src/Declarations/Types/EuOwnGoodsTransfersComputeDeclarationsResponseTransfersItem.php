<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class EuOwnGoodsTransfersComputeDeclarationsResponseTransfersItem extends JsonSerializableType
{
    /**
     * @var string $movementId
     */
    #[JsonProperty('movementId')]
    public string $movementId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

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
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $cost
     */
    #[JsonProperty('cost')]
    public string $cost;

    /**
     * @var string $fromCountryCode
     */
    #[JsonProperty('fromCountryCode')]
    public string $fromCountryCode;

    /**
     * @var string $toCountryCode
     */
    #[JsonProperty('toCountryCode')]
    public string $toCountryCode;

    /**
     * @param array{
     *   movementId: string,
     *   date: DateTime,
     *   itemId: string,
     *   itemName: string,
     *   quantity: string,
     *   cost: string,
     *   fromCountryCode: string,
     *   toCountryCode: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->movementId = $values['movementId'];
        $this->date = $values['date'];
        $this->itemId = $values['itemId'];
        $this->itemName = $values['itemName'];
        $this->quantity = $values['quantity'];
        $this->cost = $values['cost'];
        $this->fromCountryCode = $values['fromCountryCode'];
        $this->toCountryCode = $values['toCountryCode'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
