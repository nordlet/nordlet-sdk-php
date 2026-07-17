<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankSettlementsMatchRequest extends JsonSerializableType
{
    /**
     * @var string $lineId
     */
    #[JsonProperty('lineId')]
    public string $lineId;

    /**
     * @var ?string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public ?string $invoiceId;

    /**
     * @param array{
     *   lineId: string,
     *   invoiceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->lineId = $values['lineId'];
        $this->invoiceId = $values['invoiceId'] ?? null;
    }
}
