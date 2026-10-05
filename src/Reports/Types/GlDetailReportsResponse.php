<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GlDetailReportsResponse extends JsonSerializableType
{
    /**
     * @var GlDetailReportsResponseAccount $account
     */
    #[JsonProperty('account')]
    public GlDetailReportsResponseAccount $account;

    /**
     * @var string $opening
     */
    #[JsonProperty('opening')]
    public string $opening;

    /**
     * @var string $closing
     */
    #[JsonProperty('closing')]
    public string $closing;

    /**
     * @var array<GlDetailReportsResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([GlDetailReportsResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   account: GlDetailReportsResponseAccount,
     *   opening: string,
     *   closing: string,
     *   rows: array<GlDetailReportsResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->account = $values['account'];
        $this->opening = $values['opening'];
        $this->closing = $values['closing'];
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
