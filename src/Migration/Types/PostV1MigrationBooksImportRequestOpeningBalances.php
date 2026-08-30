<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1MigrationBooksImportRequestOpeningBalances extends JsonSerializableType
{
    /**
     * @var ?string $date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?string $balancingAccountCode
     */
    #[JsonProperty('balancingAccountCode')]
    public ?string $balancingAccountCode;

    /**
     * @var array<PostV1MigrationBooksImportRequestOpeningBalancesEntriesItem> $entries
     */
    #[JsonProperty('entries'), ArrayType([PostV1MigrationBooksImportRequestOpeningBalancesEntriesItem::class])]
    public array $entries;

    /**
     * @param array{
     *   entries: array<PostV1MigrationBooksImportRequestOpeningBalancesEntriesItem>,
     *   date?: ?string,
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
