<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class UsageListBillingResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $companyId
     */
    #[JsonProperty('companyId')]
    public string $companyId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var value-of<UsageListBillingResponseRowsItemMetric> $metric
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
     *   date: DateTime,
     *   metric: value-of<UsageListBillingResponseRowsItemMetric>,
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
