<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TransactionsListBillingResponse extends JsonSerializableType
{
    /**
     * @var array<TransactionsListBillingResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([TransactionsListBillingResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<TransactionsListBillingResponseRowsItem>,
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
