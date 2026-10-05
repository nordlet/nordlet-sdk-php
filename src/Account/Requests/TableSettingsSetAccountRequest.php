<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TableSettingsSetAccountRequest extends JsonSerializableType
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
     * @var ?float $pageSize
     */
    #[JsonProperty('pageSize')]
    public ?float $pageSize;

    /**
     * @param array{
     *   tableKey: string,
     *   columns?: ?array<string>,
     *   pageSize?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tableKey = $values['tableKey'];
        $this->columns = $values['columns'] ?? null;
        $this->pageSize = $values['pageSize'] ?? null;
    }
}
