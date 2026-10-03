<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsAutomationListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1DeclarationsAutomationListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsAutomationListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   rows: array<PostV1DeclarationsAutomationListResponseRowsItem>,
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
