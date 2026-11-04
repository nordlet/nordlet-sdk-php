<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Pos\Types\RefundsCreatePosRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class RefundsCreatePosRequest extends JsonSerializableType
{
    /**
     * @var string $shiftId
     */
    #[JsonProperty('shiftId')]
    public string $shiftId;

    /**
     * @var string $receiptId
     */
    #[JsonProperty('receiptId')]
    public string $receiptId;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var array<RefundsCreatePosRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([RefundsCreatePosRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   shiftId: string,
     *   receiptId: string,
     *   lines: array<RefundsCreatePosRequestLinesItem>,
     *   date?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->shiftId = $values['shiftId'];
        $this->receiptId = $values['receiptId'];
        $this->date = $values['date'] ?? null;
        $this->lines = $values['lines'];
    }
}
