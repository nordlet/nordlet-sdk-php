<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Inventory\Types\LandedCostsCreateInventoryRequestMethod;
use Nordlet\Core\Types\ArrayType;

class LandedCostsCreateInventoryRequest extends JsonSerializableType
{
    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?value-of<LandedCostsCreateInventoryRequestMethod> $method
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * @var ?string $goodsReceiptId
     */
    #[JsonProperty('goodsReceiptId')]
    public ?string $goodsReceiptId;

    /**
     * @var ?array<string> $movementIds
     */
    #[JsonProperty('movementIds'), ArrayType(['string'])]
    public ?array $movementIds;

    /**
     * @var ?string $sourceInvoiceId
     */
    #[JsonProperty('sourceInvoiceId')]
    public ?string $sourceInvoiceId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   date: DateTime,
     *   amount: string,
     *   method?: ?value-of<LandedCostsCreateInventoryRequestMethod>,
     *   goodsReceiptId?: ?string,
     *   movementIds?: ?array<string>,
     *   sourceInvoiceId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->amount = $values['amount'];
        $this->method = $values['method'] ?? null;
        $this->goodsReceiptId = $values['goodsReceiptId'] ?? null;
        $this->movementIds = $values['movementIds'] ?? null;
        $this->sourceInvoiceId = $values['sourceInvoiceId'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
