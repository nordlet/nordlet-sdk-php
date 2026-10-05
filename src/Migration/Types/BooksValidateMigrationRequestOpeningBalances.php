<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class BooksValidateMigrationRequestOpeningBalances extends JsonSerializableType
{
    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var ?string $balancingAccountCode
     */
    #[JsonProperty('balancingAccountCode')]
    public ?string $balancingAccountCode;

    /**
     * @var array<BooksValidateMigrationRequestOpeningBalancesEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([BooksValidateMigrationRequestOpeningBalancesEntriesItem::class])]
    public array $entries;

    /**
     * @param array{
     *   entries: array<BooksValidateMigrationRequestOpeningBalancesEntriesItem>,
     *   date?: ?DateTime,
     *   balancingAccountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'] ?? null;
        $this->balancingAccountCode = $values['balancingAccountCode'] ?? null;
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
