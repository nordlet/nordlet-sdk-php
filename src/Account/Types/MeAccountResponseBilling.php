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
     * @param array{
     *   status: value-of<MeAccountResponseBillingStatus>,
     *   plan: string,
     *   balanceCents: int,
     *   payerUserId: string,
     *   payerEmail: string,
     *   isPayer: bool,
     *   trialEndsAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->plan = $values['plan'];
        $this->balanceCents = $values['balanceCents'];
        $this->trialEndsAt = $values['trialEndsAt'] ?? null;
        $this->payerUserId = $values['payerUserId'];
        $this->payerEmail = $values['payerEmail'];
        $this->isPayer = $values['isPayer'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
