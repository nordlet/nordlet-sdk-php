<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class UsageListBillingResponse extends JsonSerializableType
{
    /**
     * @var array<UsageListBillingResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([UsageListBillingResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<UsageListBillingResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
