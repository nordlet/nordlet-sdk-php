<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SettlementsImportBankResponse extends JsonSerializableType
{
    /**
     * @var value-of<SettlementsImportBankResponseFormat> $format
     */
    #[JsonProperty('format')]
    public string $format;

    /**
     * @var int $imported
     */
    #[JsonProperty('imported')]
    public int $imported;

    /**
     * @var int $updated
     */
    #[JsonProperty('updated')]
    public int $updated;

    /**
     * @var int $skipped
     */
    #[JsonProperty('skipped')]
    public int $skipped;

    /**
     * @var int $skippedUnassigned
     */
    #[JsonProperty('skippedUnassigned')]
    public int $skippedUnassigned;

    /**
     * @var int $skippedPayoutRows
     */
    #[JsonProperty('skippedPayoutRows')]
    public int $skippedPayoutRows;

    /**
     * @var int $skippedNotSettled
     */
    #[JsonProperty('skippedNotSettled')]
    public int $skippedNotSettled;

    /**
     * @var array<SettlementsImportBankResponseBatchesItem> $batches
     */
    #[JsonProperty('batches'), ArrayType([SettlementsImportBankResponseBatchesItem::class])]
    public array $batches;

    /**
     * @param array{
     *   format: value-of<SettlementsImportBankResponseFormat>,
     *   imported: int,
     *   updated: int,
     *   skipped: int,
     *   skippedUnassigned: int,
     *   skippedPayoutRows: int,
     *   skippedNotSettled: int,
     *   batches: array<SettlementsImportBankResponseBatchesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->format = $values['format'];
        $this->imported = $values['imported'];
        $this->updated = $values['updated'];
        $this->skipped = $values['skipped'];
        $this->skippedUnassigned = $values['skippedUnassigned'];
        $this->skippedPayoutRows = $values['skippedPayoutRows'];
        $this->skippedNotSettled = $values['skippedNotSettled'];
        $this->batches = $values['batches'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
