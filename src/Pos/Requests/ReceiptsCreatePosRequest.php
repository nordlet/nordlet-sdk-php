<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Pos\Types\ReceiptsCreatePosRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class ReceiptsCreatePosRequest extends JsonSerializableType
{
    /**
     * @var string $shiftId
     */
    #[JsonProperty('shiftId')]
    public string $shiftId;

    /**
     * @var array<ReceiptsCreatePosRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([ReceiptsCreatePosRequestLinesItem::class])]
    public array $lines;

    /**
     * @var ?string $cashAmount
     */
    #[JsonProperty('cashAmount')]
    public ?string $cashAmount;

    /**
     * @var ?string $cardAmount
     */
    #[JsonProperty('cardAmount')]
    public ?string $cardAmount;

    /**
     * @param array{
     *   shiftId: string,
     *   lines: array<ReceiptsCreatePosRequestLinesItem>,
     *   cashAmount?: ?string,
     *   cardAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->shiftId = $values['shiftId'];
        $this->lines = $values['lines'];
        $this->cashAmount = $values['cashAmount'] ?? null;
        $this->cardAmount = $values['cardAmount'] ?? null;
    }
}
