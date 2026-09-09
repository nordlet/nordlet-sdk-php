<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountTableSettingsListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $tableKey
     */
    #[JsonProperty('tableKey')]
    public string $tableKey;

    /**
     * @var ?array<string> $columns
     */
    #[JsonProperty('columns'), ArrayType(['string'])]
    public ?array $columns;

    /**
     * @var ?int $pageSize
     */
    #[JsonProperty('pageSize')]
    public ?int $pageSize;

    /**
     * @param array{
     *   tableKey: string,
     *   columns?: ?array<string>,
     *   pageSize?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tableKey = $values['tableKey'];
        $this->columns = $values['columns'] ?? null;
        $this->pageSize = $values['pageSize'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
