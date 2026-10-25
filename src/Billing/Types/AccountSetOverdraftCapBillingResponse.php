<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class AccountSetOverdraftCapBillingResponse extends JsonSerializableType
{
    /**
     * @var value-of<AccountSetOverdraftCapBillingResponsePlan> $plan
     */
    #[JsonProperty('plan')]
    public string $plan;

    /**
     * @var value-of<AccountSetOverdraftCapBillingResponseAccountType> $accountType
     */
    #[JsonProperty('accountType')]
    public string $accountType;

    /**
     * @var value-of<AccountSetOverdraftCapBillingResponseStatus> $status
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
     * @var ?DateTime $subscriptionCancelAt When the Stripe subscription ends after `subscription/cancel`; null while it renews
     */
    #[JsonProperty('subscriptionCancelAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $subscriptionCancelAt;

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
     * @var AccountSetOverdraftCapBillingResponseMonthToDate $monthToDate
     */
    #[JsonProperty('monthToDate')]
    public AccountSetOverdraftCapBillingResponseMonthToDate $monthToDate;

    /**
     * @var array<string, AccountSetOverdraftCapBillingResponsePlansValue> $plans
     */
    #[JsonProperty('plans'), ArrayType(['string' => AccountSetOverdraftCapBillingResponsePlansValue::class])]
    public array $plans;

    /**
     * @var string $apiRequestEur
     */
    #[JsonProperty('apiRequestEur')]
    public string $apiRequestEur;

    /**
     * @var AccountSetOverdraftCapBillingResponseTopUp $topUp
     */
    #[JsonProperty('topUp')]
    public AccountSetOverdraftCapBillingResponseTopUp $topUp;

    /**
     * @var AccountSetOverdraftCapBillingResponseAutoTopUp $autoTopUp
     */
    #[JsonProperty('autoTopUp')]
    public AccountSetOverdraftCapBillingResponseAutoTopUp $autoTopUp;

    /**
     * @var int $overdraftCapCents
     */
    #[JsonProperty('overdraftCapCents')]
    public int $overdraftCapCents;

    /**
     * @var int $overdraftCapMaxCents
     */
    #[JsonProperty('overdraftCapMaxCents')]
    public int $overdraftCapMaxCents;

    /**
     * @var int $trialDays
     */
    #[JsonProperty('trialDays')]
    public int $trialDays;

    /**
     * @param array{
     *   plan: value-of<AccountSetOverdraftCapBillingResponsePlan>,
     *   accountType: value-of<AccountSetOverdraftCapBillingResponseAccountType>,
     *   status: value-of<AccountSetOverdraftCapBillingResponseStatus>,
     *   balanceCents: int,
     *   paymentsConfigured: bool,
     *   hasPaymentAccount: bool,
     *   hasSubscription: bool,
     *   monthToDate: AccountSetOverdraftCapBillingResponseMonthToDate,
     *   plans: array<string, AccountSetOverdraftCapBillingResponsePlansValue>,
     *   apiRequestEur: string,
     *   topUp: AccountSetOverdraftCapBillingResponseTopUp,
     *   autoTopUp: AccountSetOverdraftCapBillingResponseAutoTopUp,
     *   overdraftCapCents: int,
     *   overdraftCapMaxCents: int,
     *   trialDays: int,
     *   trialEndsAt?: ?DateTime,
     *   firstTopUpAt?: ?DateTime,
     *   lastChargedDate?: ?DateTime,
     *   subscriptionCancelAt?: ?DateTime,
     *   paymentFailedAt?: ?DateTime,
     *   paymentFailedInvoiceUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->plan = $values['plan'];
        $this->accountType = $values['accountType'];
        $this->status = $values['status'];
        $this->balanceCents = $values['balanceCents'];
        $this->trialEndsAt = $values['trialEndsAt'] ?? null;
        $this->firstTopUpAt = $values['firstTopUpAt'] ?? null;
        $this->lastChargedDate = $values['lastChargedDate'] ?? null;
        $this->paymentsConfigured = $values['paymentsConfigured'];
        $this->hasPaymentAccount = $values['hasPaymentAccount'];
        $this->hasSubscription = $values['hasSubscription'];
        $this->subscriptionCancelAt = $values['subscriptionCancelAt'] ?? null;
        $this->paymentFailedAt = $values['paymentFailedAt'] ?? null;
        $this->paymentFailedInvoiceUrl = $values['paymentFailedInvoiceUrl'] ?? null;
        $this->monthToDate = $values['monthToDate'];
        $this->plans = $values['plans'];
        $this->apiRequestEur = $values['apiRequestEur'];
        $this->topUp = $values['topUp'];
        $this->autoTopUp = $values['autoTopUp'];
        $this->overdraftCapCents = $values['overdraftCapCents'];
        $this->overdraftCapMaxCents = $values['overdraftCapMaxCents'];
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
