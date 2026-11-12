<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class TransactionsImportBankResponse extends JsonSerializableType
{
    /**
     * @var int $imported
     */
    #[JsonProperty('imported')]
    public int $imported;

    /**
     * @var int $skipped
     */
    #[JsonProperty('skipped')]
    public int $skipped;

    /**
     * @var array<TransactionsImportBankResponseDuplicatesItem> $duplicates
     */
    #[JsonProperty('duplicates'), ArrayType([TransactionsImportBankResponseDuplicatesItem::class])]
    public array $duplicates;

    /**
     * @param array{
     *   imported: int,
     *   skipped: int,
     *   duplicates: array<TransactionsImportBankResponseDuplicatesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->imported = $values['imported'];
        $this->skipped = $values['skipped'];
        $this->duplicates = $values['duplicates'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
