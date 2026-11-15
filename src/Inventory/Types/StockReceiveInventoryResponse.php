<?php

namespace Nordlet\Inventory\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class StockReceiveInventoryResponse extends JsonSerializableType
{
    /**
     * @var string $movementId
     */
    #[JsonProperty('movementId')]
    public string $movementId;

    /**
     * @var string $totalCost
     */
    #[JsonProperty('totalCost')]
    public string $totalCost;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var array<StockReceiveInventoryResponseWarningsItem> $warnings
     */
    #[JsonProperty('warnings'), ArrayType([StockReceiveInventoryResponseWarningsItem::class])]
    public array $warnings;

    /**
     * @param array{
     *   movementId: string,
     *   totalCost: string,
     *   warnings: array<StockReceiveInventoryResponseWarningsItem>,
     *   journalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->movementId = $values['movementId'];
        $this->totalCost = $values['totalCost'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
