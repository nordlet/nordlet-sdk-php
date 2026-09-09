<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsSubmissionsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1DeclarationsSubmissionsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsSubmissionsListResponseRowsItem::class])]
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
     * @param array{
     *   rows: array<PostV1DeclarationsSubmissionsListResponseRowsItem>,
     *   page: int,
     *   pageSize: int,
     *   total: int,
     *   totals?: ?array<string, string>,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
