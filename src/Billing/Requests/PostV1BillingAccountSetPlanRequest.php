<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Billing\Types\PostV1BillingAccountSetPlanRequestPlan;
use Nordlet\Core\Json\JsonProperty;

class PostV1BillingAccountSetPlanRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostV1BillingAccountSetPlanRequestPlan> $plan
     */
    #[JsonProperty('plan')]
    public string $plan;

    /**
     * @param array{
     *   plan: value-of<PostV1BillingAccountSetPlanRequestPlan>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->plan = $values['plan'];
    }
}
