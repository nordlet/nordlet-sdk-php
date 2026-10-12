<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class FlatRateConfirmBillingRequest extends JsonSerializableType
{
    /**
     * @var string $sessionId
     */
    #[JsonProperty('sessionId')]
    public string $sessionId;

    /**
     * @param array{
     *   sessionId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sessionId = $values['sessionId'];
    }
}
