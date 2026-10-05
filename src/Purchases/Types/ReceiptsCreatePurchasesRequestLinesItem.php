<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ReceiptsCreatePurchasesRequestLinesItem extends JsonSerializableType
{
    /**
     * @var string $orderLineId
     */
    #[JsonProperty('orderLineId')]
    public string $orderLineId;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

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
     *   orderLineId: string,
     *   quantity: string,
     *   lotNumber?: ?string,
     *   expiryDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->orderLineId = $values['orderLineId'];
        $this->quantity = $values['quantity'];
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
