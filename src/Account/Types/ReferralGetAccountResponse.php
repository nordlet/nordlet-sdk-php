<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ReferralGetAccountResponse extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $link
     */
    #[JsonProperty('link')]
    public string $link;

    /**
     * @var int $points
     */
    #[JsonProperty('points')]
    public int $points;

    /**
     * @var int $referredCount
     */
    #[JsonProperty('referredCount')]
    public int $referredCount;

    /**
     * @var ReferralGetAccountResponseRates $rates
     */
    #[JsonProperty('rates')]
    public ReferralGetAccountResponseRates $rates;

    /**
     * @var array<ReferralGetAccountResponseHistoryItem> $history
     */
    #[JsonProperty('history'), ArrayType([ReferralGetAccountResponseHistoryItem::class])]
    public array $history;

    /**
     * @param array{
     *   code: string,
     *   link: string,
     *   points: int,
     *   referredCount: int,
     *   rates: ReferralGetAccountResponseRates,
     *   history: array<ReferralGetAccountResponseHistoryItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->link = $values['link'];
        $this->points = $values['points'];
        $this->referredCount = $values['referredCount'];
        $this->rates = $values['rates'];
        $this->history = $values['history'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
