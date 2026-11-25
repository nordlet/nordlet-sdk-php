<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\JournalTemplatesCreateLedgerRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class JournalTemplatesCreateLedgerRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var array<JournalTemplatesCreateLedgerRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([JournalTemplatesCreateLedgerRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   name: string,
     *   lines: array<JournalTemplatesCreateLedgerRequestLinesItem>,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->lines = $values['lines'];
    }
}
