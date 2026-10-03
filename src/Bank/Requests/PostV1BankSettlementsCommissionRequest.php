<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankSettlementsCommissionRequest extends JsonSerializableType
{
    /**
     * @var string $lineId
     */
    #[JsonProperty('lineId')]
    public string $lineId;

    /**
     * @var ?string $commissionPercent
     */
    #[JsonProperty('commissionPercent')]
    public ?string $commissionPercent;

    /**
     * @var ?string $commissionAmount
     */
    #[JsonProperty('commissionAmount')]
    public ?string $commissionAmount;

    /**
     * @param array{
     *   lineId: string,
     *   commissionPercent?: ?string,
     *   commissionAmount?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->lineId = $values['lineId'];
        $this->commissionPercent = $values['commissionPercent'] ?? null;
        $this->commissionAmount = $values['commissionAmount'] ?? null;
    }
}
