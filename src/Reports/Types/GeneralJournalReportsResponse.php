<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GeneralJournalReportsResponse extends JsonSerializableType
{
    /**
     * @var int $total
     */
    #[JsonProperty('total')]
    public int $total;

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
     * @var array<GeneralJournalReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([GeneralJournalReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   total: int,
     *   page: int,
     *   pageSize: int,
     *   rows: array<GeneralJournalReportsResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->total = $values['total'];
        $this->page = $values['page'];
        $this->pageSize = $values['pageSize'];
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
