<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class MeAccountResponseBilling extends JsonSerializableType
{
    /**
     * @var value-of<MeAccountResponseBillingStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $plan
     */
    #[JsonProperty('plan')]
    public string $plan;

    /**
     * @var int $balanceCents
     */
    #[JsonProperty('balanceCents')]
    public int $balanceCents;

    /**
     * @var int $overdraftAllowanceCents
     */
    #[JsonProperty('overdraftAllowanceCents')]
    public int $overdraftAllowanceCents;

    /**
     * @var ?DateTime $trialEndsAt
     */
    #[JsonProperty('trialEndsAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $trialEndsAt;

    /**
     * @var string $payerUserId
     */
    #[JsonProperty('payerUserId')]
    public string $payerUserId;

    /**
     * @var string $payerEmail
     */
    #[JsonProperty('payerEmail')]
    public string $payerEmail;

    /**
     * @var bool $isPayer
     */
    #[JsonProperty('isPayer')]
    public bool $isPayer;

    /**
     * @var bool $planChosen
     */
    #[JsonProperty('planChosen')]
    public bool $planChosen;

    /**
     * @var bool $flatRate
     */
    #[JsonProperty('flatRate')]
    public bool $flatRate;

    /**
     * @param array{
     *   status: value-of<MeAccountResponseBillingStatus>,
     *   plan: string,
     *   balanceCents: int,
     *   overdraftAllowanceCents: int,
     *   payerUserId: string,
     *   payerEmail: string,
     *   isPayer: bool,
     *   planChosen: bool,
     *   flatRate: bool,
     *   trialEndsAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->plan = $values['plan'];
        $this->balanceCents = $values['balanceCents'];
        $this->overdraftAllowanceCents = $values['overdraftAllowanceCents'];
        $this->trialEndsAt = $values['trialEndsAt'] ?? null;
        $this->payerUserId = $values['payerUserId'];
        $this->payerEmail = $values['payerEmail'];
        $this->isPayer = $values['isPayer'];
        $this->planChosen = $values['planChosen'];
        $this->flatRate = $values['flatRate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
