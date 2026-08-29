<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BillingUsageListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $companyId
     */
    #[JsonProperty('companyId')]
    public string $companyId;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var value-of<PostV1BillingUsageListResponseRowsItemMetric> $metric
     */
    #[JsonProperty('metric')]
    public string $metric;

    /**
     * @var float $quantity
     */
    #[JsonProperty('quantity')]
    public float $quantity;

    /**
     * @param array{
     *   companyId: string,
     *   date: string,
     *   metric: value-of<PostV1BillingUsageListResponseRowsItemMetric>,
     *   quantity: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyId = $values['companyId'];
        $this->date = $values['date'];
        $this->metric = $values['metric'];
        $this->quantity = $values['quantity'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
