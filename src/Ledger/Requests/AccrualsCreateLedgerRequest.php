<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Ledger\Types\AccrualsCreateLedgerRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class AccrualsCreateLedgerRequest extends JsonSerializableType
{
    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var string $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @var array<AccrualsCreateLedgerRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([AccrualsCreateLedgerRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   date: DateTime,
     *   reason: string,
     *   lines: array<AccrualsCreateLedgerRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'];
        $this->reason = $values['reason'];
        $this->lines = $values['lines'];
    }
}
