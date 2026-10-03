<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1BillingAccountGetResponse extends JsonSerializableType
{
    /**
     * @var value-of<PostV1BillingAccountGetResponsePlan> $plan
     */
    #[JsonProperty('plan')]
    public string $plan;

    /**
     * @var value-of<PostV1BillingAccountGetResponseStatus> $status
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
     * @var ?string $paymentFailedAt
     */
    #[JsonProperty('paymentFailedAt')]
    public ?string $paymentFailedAt;

    /**
     * @var ?string $paymentFailedInvoiceUrl
     */
    #[JsonProperty('paymentFailedInvoiceUrl')]
    public ?string $paymentFailedInvoiceUrl;

    /**
     * @var PostV1BillingAccountGetResponseMonthToDate $monthToDate
     */
    #[JsonProperty('monthToDate')]
    public PostV1BillingAccountGetResponseMonthToDate $monthToDate;

    /**
     * @var array<string, PostV1BillingAccountGetResponsePlansValue> $plans
     */
    #[JsonProperty('plans'), ArrayType(['string' => PostV1BillingAccountGetResponsePlansValue::class])]
    public array $plans;

    /**
     * @var PostV1BillingAccountGetResponseTopUp $topUp
     */
    #[JsonProperty('topUp')]
    public PostV1BillingAccountGetResponseTopUp $topUp;

    /**
     * @var int $trialDays
     */
    #[JsonProperty('trialDays')]
    public int $trialDays;

    /**
     * @param array{
     *   plan: value-of<PostV1BillingAccountGetResponsePlan>,
     *   status: value-of<PostV1BillingAccountGetResponseStatus>,
     *   balanceCents: int,
     *   paymentsConfigured: bool,
     *   hasPaymentAccount: bool,
     *   hasSubscription: bool,
     *   monthToDate: PostV1BillingAccountGetResponseMonthToDate,
     *   plans: array<string, PostV1BillingAccountGetResponsePlansValue>,
     *   topUp: PostV1BillingAccountGetResponseTopUp,
     *   trialDays: int,
     *   trialEndsAt?: ?string,
     *   firstTopUpAt?: ?string,
     *   lastChargedDate?: ?string,
     *   paymentFailedAt?: ?string,
     *   paymentFailedInvoiceUrl?: ?string,
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
        $this->paymentFailedAt = $values['paymentFailedAt'] ?? null;
        $this->paymentFailedInvoiceUrl = $values['paymentFailedInvoiceUrl'] ?? null;
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
