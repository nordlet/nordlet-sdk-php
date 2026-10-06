<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DebtRemindersListPartnersResponse extends JsonSerializableType
{
    /**
     * @var array<DebtRemindersListPartnersResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([DebtRemindersListPartnersResponseRowsItem::class])]
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
     * @var ?array<string, string> $totals
     */
    #[JsonProperty('totals'), ArrayType(['string' => 'string'])]
    public ?array $totals;

    /**
     * @var ?array<string, array<string, string>> $totalsByCurrency The requested totals split by currency code, present when the listed records carry a currency
     */
    #[JsonProperty('totalsByCurrency'), ArrayType(['string' => ['string' => 'string']])]
    public ?array $totalsByCurrency;

    /**
     * @param array{
     *   rows: array<DebtRemindersListPartnersResponseRowsItem>,
     *   page: int,
     *   pageSize: int,
     *   total: int,
     *   totals?: ?array<string, string>,
     *   totalsByCurrency?: ?array<string, array<string, string>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rows = $values['rows'];
        $this->page = $values['page'];
        $this->pageSize = $values['pageSize'];
        $this->total = $values['total'];
        $this->totals = $values['totals'] ?? null;
        $this->totalsByCurrency = $values['totalsByCurrency'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
