<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PaymentsListSalesResponse extends JsonSerializableType
{
    /**
     * @var array<PaymentsListSalesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PaymentsListSalesResponseRowsItem::class])]
    public array $rows;

    /**
     * @var int $page
     */
    #[JsonProperty('page')]
    public int $page;

    /**
     * @var int $pageSize
     */
    #[JsonProperty('pageSize')]
    public int $pageSize;

    /**
     * @var int $total
     */
    #[JsonProperty('total')]
    public int $total;

    /**
     * @var array<string, string> $totalsByCurrency
     */
    #[JsonProperty('totalsByCurrency'), ArrayType(['string' => 'string'])]
    public array $totalsByCurrency;

    /**
     * @param array{
     *   rows: array<PaymentsListSalesResponseRowsItem>,
     *   page: int,
     *   pageSize: int,
     *   total: int,
     *   totalsByCurrency: array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
        $this->page = $values['page'];
        $this->pageSize = $values['pageSize'];
        $this->total = $values['total'];
        $this->totalsByCurrency = $values['totalsByCurrency'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
