<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountExportResponseBilling extends JsonSerializableType
{
    /**
     * @var string $status
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
     * @var ?string $firstTopUpAt
     */
    #[JsonProperty('firstTopUpAt')]
    public ?string $firstTopUpAt;

    /**
     * @param array{
     *   status: string,
     *   plan: string,
     *   balanceCents: int,
     *   trialEndsAt?: ?string,
     *   firstTopUpAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->plan = $values['plan'];
        $this->balanceCents = $values['balanceCents'];
        $this->trialEndsAt = $values['trialEndsAt'] ?? null;
        $this->firstTopUpAt = $values['firstTopUpAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
