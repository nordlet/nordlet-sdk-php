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
     * @param array{
     *   status: value-of<PostV1AccountMeResponseBillingStatus>,
     *   plan: string,
     *   balanceCents: int,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
