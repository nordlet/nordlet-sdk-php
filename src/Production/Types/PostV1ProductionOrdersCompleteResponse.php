<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionOrdersCompleteResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1ProductionOrdersCompleteResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $bomId
     */
    #[JsonProperty('bomId')]
    public string $bomId;

    /**
     * @var string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public string $warehouseId;

    /**
     * @var string $quantity
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var value-of<PostV1ProductionOrdersCompleteResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $totalCost
     */
    #[JsonProperty('totalCost')]
    public ?string $totalCost;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<PostV1ProductionOrdersCompleteResponseType>,
     *   bomId: string,
     *   warehouseId: string,
     *   quantity: string,
     *   date: string,
     *   status: value-of<PostV1ProductionOrdersCompleteResponseStatus>,
     *   createdAt: string,
     *   totalCost?: ?string,
     *   journalTransactionId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->type = $values['type'];
        $this->bomId = $values['bomId'];
        $this->warehouseId = $values['warehouseId'];
        $this->quantity = $values['quantity'];
        $this->date = $values['date'];
        $this->status = $values['status'];
        $this->totalCost = $values['totalCost'] ?? null;
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
