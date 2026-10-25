<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class SubscriptionCancelBillingRequest extends JsonSerializableType
{
    /**
     * @param array{
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        unset($values);
    }
}
