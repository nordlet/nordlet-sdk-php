<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class BooksValidateMigrationRequestJournalItem extends JsonSerializableType
{
    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

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
     * @var array<BooksValidateMigrationRequestJournalItemEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([BooksValidateMigrationRequestJournalItemEntriesItem::class])]
    public array $entries;

    /**
     * @param array{
     *   date: DateTime,
     *   entries: array<BooksValidateMigrationRequestJournalItemEntriesItem>,
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
