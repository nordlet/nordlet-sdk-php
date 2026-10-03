<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1LedgerStatementRowsListResponseScheme extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var string $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var array<PostV1LedgerStatementRowsListResponseSchemeRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1LedgerStatementRowsListResponseSchemeRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   key: string,
     *   country: string,
     *   title: string,
     *   source: string,
     *   rows: array<PostV1LedgerStatementRowsListResponseSchemeRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->country = $values['country'];
        $this->title = $values['title'];
        $this->source = $values['source'];
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
