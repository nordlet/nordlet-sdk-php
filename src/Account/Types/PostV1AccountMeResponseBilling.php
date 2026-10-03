<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountMeResponseBilling extends JsonSerializableType
{
    /**
     * @var value-of<PostV1AccountMeResponseBillingStatus> $status
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
     * @var ?string $trialEndsAt
     */
    #[JsonProperty('trialEndsAt')]
    public ?string $trialEndsAt;

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
     *   status: value-of<PostV1AccountMeResponseBillingStatus>,
     *   plan: string,
     *   balanceCents: int,
     *   payerUserId: string,
     *   payerEmail: string,
     *   isPayer: bool,
     *   trialEndsAt?: ?string,
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
