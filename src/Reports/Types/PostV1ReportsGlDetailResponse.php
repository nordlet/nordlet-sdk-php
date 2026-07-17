<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsGlDetailResponse extends JsonSerializableType
{
    /**
     * @var PostV1ReportsGlDetailResponseAccount $account
     */
    #[JsonProperty('account')]
    public PostV1ReportsGlDetailResponseAccount $account;

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
     * @var array<PostV1ReportsGlDetailResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReportsGlDetailResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   account: PostV1ReportsGlDetailResponseAccount,
     *   opening: string,
     *   closing: string,
     *   rows: array<PostV1ReportsGlDetailResponseRowsItem>,
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
