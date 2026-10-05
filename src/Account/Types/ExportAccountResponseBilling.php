<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ExportAccountResponseBilling extends JsonSerializableType
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
     * @param array{
     *   status: string,
     *   plan: string,
     *   balanceCents: int,
     *   trialEndsAt?: ?DateTime,
     *   firstTopUpAt?: ?DateTime,
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
