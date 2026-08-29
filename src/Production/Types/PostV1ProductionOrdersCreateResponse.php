<?php

namespace Nordlet\Production\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ProductionOrdersCreateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1ProductionOrdersCreateResponseType> $type
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
     * @var ?string $routingId
     */
    #[JsonProperty('routingId')]
    public ?string $routingId;

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
     * @var value-of<PostV1ProductionOrdersCreateResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $scrappedQuantity
     */
    #[JsonProperty('scrappedQuantity')]
    public ?string $scrappedQuantity;

    /**
     * @var ?string $materialCost
     */
    #[JsonProperty('materialCost')]
    public ?string $materialCost;

    /**
     * @var ?string $laborCost
     */
    #[JsonProperty('laborCost')]
    public ?string $laborCost;

    /**
     * @var ?string $scrapCost
     */
    #[JsonProperty('scrapCost')]
    public ?string $scrapCost;

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
     * @var array<PostV1ProductionOrdersCreateResponseOperationsItem> $operations
     */
    #[JsonProperty('operations'), ArrayType([PostV1ProductionOrdersCreateResponseOperationsItem::class])]
    public array $operations;

    /**
     * @var array<PostV1ProductionOrdersCreateResponseQualityChecksItem> $qualityChecks
     */
    #[JsonProperty('qualityChecks'), ArrayType([PostV1ProductionOrdersCreateResponseQualityChecksItem::class])]
    public array $qualityChecks;

    /**
     * @param array{
     *   id: string,
     *   type: value-of<PostV1ProductionOrdersCreateResponseType>,
     *   bomId: string,
     *   warehouseId: string,
     *   quantity: string,
     *   date: string,
     *   status: value-of<PostV1ProductionOrdersCreateResponseStatus>,
     *   createdAt: string,
     *   operations: array<PostV1ProductionOrdersCreateResponseOperationsItem>,
     *   qualityChecks: array<PostV1ProductionOrdersCreateResponseQualityChecksItem>,
     *   routingId?: ?string,
     *   scrappedQuantity?: ?string,
     *   materialCost?: ?string,
     *   laborCost?: ?string,
     *   scrapCost?: ?string,
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
        $this->routingId = $values['routingId'] ?? null;
        $this->quantity = $values['quantity'];
        $this->date = $values['date'];
        $this->status = $values['status'];
        $this->scrappedQuantity = $values['scrappedQuantity'] ?? null;
        $this->materialCost = $values['materialCost'] ?? null;
        $this->laborCost = $values['laborCost'] ?? null;
        $this->scrapCost = $values['scrapCost'] ?? null;
        $this->totalCost = $values['totalCost'] ?? null;
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->operations = $values['operations'];
        $this->qualityChecks = $values['qualityChecks'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
