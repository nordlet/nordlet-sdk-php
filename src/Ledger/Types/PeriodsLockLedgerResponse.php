<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PeriodsLockLedgerResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var value-of<PeriodsLockLedgerResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var array<PeriodsLockLedgerResponseWarningsItem> $warnings
     */
    #[JsonProperty('warnings'), ArrayType([PeriodsLockLedgerResponseWarningsItem::class])]
    public array $warnings;

    /**
     * @param array{
     *   id: string,
     *   year: int,
     *   month: int,
     *   status: value-of<PeriodsLockLedgerResponseStatus>,
     *   warnings: array<PeriodsLockLedgerResponseWarningsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->status = $values['status'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
