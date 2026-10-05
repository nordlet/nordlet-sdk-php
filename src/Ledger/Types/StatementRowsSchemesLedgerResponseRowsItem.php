<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class StatementRowsSchemesLedgerResponseRowsItem extends JsonSerializableType
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
     * @var array<StatementRowsSchemesLedgerResponseRowsItemRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([StatementRowsSchemesLedgerResponseRowsItemRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   key: string,
     *   country: string,
     *   title: string,
     *   source: string,
     *   rows: array<StatementRowsSchemesLedgerResponseRowsItemRowsItem>,
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
