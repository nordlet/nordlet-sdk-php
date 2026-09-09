<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountTableSettingsListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1AccountTableSettingsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1AccountTableSettingsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1AccountTableSettingsListResponseRowsItem>,
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
