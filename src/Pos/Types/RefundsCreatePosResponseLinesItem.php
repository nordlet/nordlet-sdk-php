<?php

namespace Nordlet\Pos\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class RefundsCreatePosResponseLinesItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $receiptLineId
     */
    #[JsonProperty('receiptLineId')]
    public string $receiptLineId;

    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $netAmount
     */
    #[JsonProperty('netAmount')]
    public string $netAmount;

    /**
     * @var string $vatAmount
     */
    #[JsonProperty('vatAmount')]
    public string $vatAmount;

    /**
     * @var string $grossAmount
     */
    #[JsonProperty('grossAmount')]
    public string $grossAmount;

    /**
     * @param array{
     *   id: string,
     *   receiptLineId: string,
     *   quantity: string,
     *   netAmount: string,
     *   vatAmount: string,
     *   grossAmount: string,
     *   itemId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->receiptLineId = $values['receiptLineId'];
        $this->itemId = $values['itemId'] ?? null;
        $this->quantity = $values['quantity'];
        $this->netAmount = $values['netAmount'];
        $this->vatAmount = $values['vatAmount'];
        $this->grossAmount = $values['grossAmount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
