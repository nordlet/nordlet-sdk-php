<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Billing\Types\AccountSetPlanBillingRequestPlan;
use Nordlet\Core\Json\JsonProperty;

class AccountSetPlanBillingRequest extends JsonSerializableType
{
    /**
     * @var value-of<AccountSetPlanBillingRequestPlan> $plan
     */
    #[JsonProperty('plan')]
    public string $plan;

    /**
     * @param array{
     *   plan: value-of<AccountSetPlanBillingRequestPlan>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->plan = $values['plan'];
    }
}
