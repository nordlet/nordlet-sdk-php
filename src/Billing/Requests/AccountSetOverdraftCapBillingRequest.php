<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AccountSetOverdraftCapBillingRequest extends JsonSerializableType
{
    /**
     * @var int $capCents
     */
    #[JsonProperty('capCents')]
    public int $capCents;

    /**
     * @param array{
     *   capCents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->capCents = $values['capCents'];
    }
}
