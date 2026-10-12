<?php

namespace Nordlet\Billing\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class FlatRateConfirmBillingResponse extends JsonSerializableType
{
    /**
     * @var value-of<FlatRateConfirmBillingResponsePlan> $plan
     */
    #[JsonProperty('plan')]
    public string $plan;

    /**
     * @var value-of<FlatRateConfirmBillingResponseAccountType> $accountType
     */
    #[JsonProperty('accountType')]
    public string $accountType;

    /**
     * @var value-of<FlatRateConfirmBillingResponseStatus> $status
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
     * @var FlatRateConfirmBillingResponseMonthToDate $monthToDate
     */
    #[JsonProperty('monthToDate')]
    public FlatRateConfirmBillingResponseMonthToDate $monthToDate;

    /**
     * @var array<string, FlatRateConfirmBillingResponsePlansValue> $plans
     */
    #[JsonProperty('plans'), ArrayType(['string' => FlatRateConfirmBillingResponsePlansValue::class])]
    public array $plans;

    /**
     * @var string $apiRequestEur
     */
    #[JsonProperty('apiRequestEur')]
    public string $apiRequestEur;

    /**
     * @var FlatRateConfirmBillingResponseTopUp $topUp
     */
    #[JsonProperty('topUp')]
    public FlatRateConfirmBillingResponseTopUp $topUp;

    /**
     * @var FlatRateConfirmBillingResponseAutoTopUp $autoTopUp
     */
    #[JsonProperty('autoTopUp')]
    public FlatRateConfirmBillingResponseAutoTopUp $autoTopUp;

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
     *   plan: value-of<FlatRateConfirmBillingResponsePlan>,
     *   accountType: value-of<FlatRateConfirmBillingResponseAccountType>,
     *   status: value-of<FlatRateConfirmBillingResponseStatus>,
     *   balanceCents: int,
     *   paymentsConfigured: bool,
     *   hasPaymentAccount: bool,
     *   hasSubscription: bool,
     *   monthToDate: FlatRateConfirmBillingResponseMonthToDate,
     *   plans: array<string, FlatRateConfirmBillingResponsePlansValue>,
     *   apiRequestEur: string,
     *   topUp: FlatRateConfirmBillingResponseTopUp,
     *   autoTopUp: FlatRateConfirmBillingResponseAutoTopUp,
     *   overdraftCapCents: int,
     *   overdraftCapMaxCents: int,
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
        $this->accountType = $values['accountType'];
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
