<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BillingAccountSetPlanResponse extends JsonSerializableType
{
    /**
     * @var value-of<PostV1BillingAccountSetPlanResponsePlan> $plan
     */
    #[JsonProperty('plan')]
    public string $plan;

    /**
     * @var value-of<PostV1BillingAccountSetPlanResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var int $balanceCents
     */
    #[JsonProperty('balanceCents')]
    public int $balanceCents;

    /**
     * @var ?string $trialEndsAt
     */
    #[JsonProperty('trialEndsAt')]
    public ?string $trialEndsAt;

    /**
     * @var ?string $firstTopUpAt
     */
    #[JsonProperty('firstTopUpAt')]
    public ?string $firstTopUpAt;

    /**
     * @var ?string $lastChargedDate
     */
    #[JsonProperty('lastChargedDate')]
    public ?string $lastChargedDate;

    /**
     * @var bool $paymentsConfigured
     */
    #[JsonProperty('paymentsConfigured')]
    public bool $paymentsConfigured;

    /**
     * @var bool $hasPaymentAccount
     */
    #[JsonProperty('hasPaymentAccount')]
    public bool $hasPaymentAccount;

    /**
     * @var bool $hasSubscription
     */
    #[JsonProperty('hasSubscription')]
    public bool $hasSubscription;

    /**
     * @var PostV1BillingAccountSetPlanResponseMonthToDate $monthToDate
     */
    #[JsonProperty('monthToDate')]
    public PostV1BillingAccountSetPlanResponseMonthToDate $monthToDate;

    /**
     * @var array<string, PostV1BillingAccountSetPlanResponsePlansValue> $plans
     */
    #[JsonProperty('plans'), ArrayType(['string' => PostV1BillingAccountSetPlanResponsePlansValue::class])]
    public array $plans;

    /**
     * @var PostV1BillingAccountSetPlanResponseTopUp $topUp
     */
    #[JsonProperty('topUp')]
    public PostV1BillingAccountSetPlanResponseTopUp $topUp;

    /**
     * @var int $trialDays
     */
    #[JsonProperty('trialDays')]
    public int $trialDays;

    /**
     * @param array{
     *   plan: value-of<PostV1BillingAccountSetPlanResponsePlan>,
     *   status: value-of<PostV1BillingAccountSetPlanResponseStatus>,
     *   balanceCents: int,
     *   paymentsConfigured: bool,
     *   hasPaymentAccount: bool,
     *   hasSubscription: bool,
     *   monthToDate: PostV1BillingAccountSetPlanResponseMonthToDate,
     *   plans: array<string, PostV1BillingAccountSetPlanResponsePlansValue>,
     *   topUp: PostV1BillingAccountSetPlanResponseTopUp,
     *   trialDays: int,
     *   trialEndsAt?: ?string,
     *   firstTopUpAt?: ?string,
     *   lastChargedDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->plan = $values['plan'];
        $this->status = $values['status'];
        $this->balanceCents = $values['balanceCents'];
        $this->trialEndsAt = $values['trialEndsAt'] ?? null;
        $this->firstTopUpAt = $values['firstTopUpAt'] ?? null;
        $this->lastChargedDate = $values['lastChargedDate'] ?? null;
        $this->paymentsConfigured = $values['paymentsConfigured'];
        $this->hasPaymentAccount = $values['hasPaymentAccount'];
        $this->hasSubscription = $values['hasSubscription'];
        $this->monthToDate = $values['monthToDate'];
        $this->plans = $values['plans'];
        $this->topUp = $values['topUp'];
        $this->trialDays = $values['trialDays'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
