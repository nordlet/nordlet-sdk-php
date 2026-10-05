<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class AccountSetPlanBillingResponse extends JsonSerializableType
{
    /**
     * @var value-of<AccountSetPlanBillingResponsePlan> $plan
     */
    #[JsonProperty('plan')]
    public string $plan;

    /**
     * @var value-of<AccountSetPlanBillingResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var int $balanceCents
     */
    #[JsonProperty('balanceCents')]
    public int $balanceCents;

    /**
     * @var ?DateTime $trialEndsAt
     */
    #[JsonProperty('trialEndsAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $trialEndsAt;

    /**
     * @var ?DateTime $firstTopUpAt
     */
    #[JsonProperty('firstTopUpAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $firstTopUpAt;

    /**
     * @var ?DateTime $lastChargedDate
     */
    #[JsonProperty('lastChargedDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $lastChargedDate;

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
     * @var ?DateTime $paymentFailedAt
     */
    #[JsonProperty('paymentFailedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $paymentFailedAt;

    /**
     * @var ?string $paymentFailedInvoiceUrl
     */
    #[JsonProperty('paymentFailedInvoiceUrl')]
    public ?string $paymentFailedInvoiceUrl;

    /**
     * @var AccountSetPlanBillingResponseMonthToDate $monthToDate
     */
    #[JsonProperty('monthToDate')]
    public AccountSetPlanBillingResponseMonthToDate $monthToDate;

    /**
     * @var array<string, AccountSetPlanBillingResponsePlansValue> $plans
     */
    #[JsonProperty('plans'), ArrayType(['string' => AccountSetPlanBillingResponsePlansValue::class])]
    public array $plans;

    /**
     * @var AccountSetPlanBillingResponseTopUp $topUp
     */
    #[JsonProperty('topUp')]
    public AccountSetPlanBillingResponseTopUp $topUp;

    /**
     * @var int $trialDays
     */
    #[JsonProperty('trialDays')]
    public int $trialDays;

    /**
     * @param array{
     *   plan: value-of<AccountSetPlanBillingResponsePlan>,
     *   status: value-of<AccountSetPlanBillingResponseStatus>,
     *   balanceCents: int,
     *   paymentsConfigured: bool,
     *   hasPaymentAccount: bool,
     *   hasSubscription: bool,
     *   monthToDate: AccountSetPlanBillingResponseMonthToDate,
     *   plans: array<string, AccountSetPlanBillingResponsePlansValue>,
     *   topUp: AccountSetPlanBillingResponseTopUp,
     *   trialDays: int,
     *   trialEndsAt?: ?DateTime,
     *   firstTopUpAt?: ?DateTime,
     *   lastChargedDate?: ?DateTime,
     *   paymentFailedAt?: ?DateTime,
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
