<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1MigrationBooksValidateRequestJournalItem extends JsonSerializableType
{
    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $reference
     */
    #[JsonProperty('reference')]
    public ?string $reference;

    /**
     * @var array<PostV1MigrationBooksValidateRequestJournalItemEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([PostV1MigrationBooksValidateRequestJournalItemEntriesItem::class])]
    public array $entries;

    /**
     * @param array{
     *   date: string,
     *   entries: array<PostV1MigrationBooksValidateRequestJournalItemEntriesItem>,
     *   description?: ?string,
     *   reference?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->description = $values['description'] ?? null;
        $this->reference = $values['reference'] ?? null;
        $this->entries = $values['entries'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
