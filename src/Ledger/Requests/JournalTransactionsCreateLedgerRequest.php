<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Ledger\Types\JournalTransactionsCreateLedgerRequestEntriesItem;
use Nordlet\Core\Types\ArrayType;

class JournalTransactionsCreateLedgerRequest extends JsonSerializableType
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
     * @var array<JournalTransactionsCreateLedgerRequestEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([JournalTransactionsCreateLedgerRequestEntriesItem::class])]
    public array $entries;

    /**
     * @param array{
     *   date: DateTime,
     *   entries: array<JournalTransactionsCreateLedgerRequestEntriesItem>,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->description = $values['description'] ?? null;
        $this->entries = $values['entries'];
    }
}
