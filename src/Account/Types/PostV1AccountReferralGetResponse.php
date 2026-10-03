<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1AccountReferralGetResponse extends JsonSerializableType
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
     * @var PostV1AccountReferralGetResponseRates $rates
     */
    #[JsonProperty('rates')]
    public PostV1AccountReferralGetResponseRates $rates;

    /**
     * @var array<PostV1AccountReferralGetResponseHistoryItem> $history
     */
    #[JsonProperty('history'), ArrayType([PostV1AccountReferralGetResponseHistoryItem::class])]
    public array $history;

    /**
     * @param array{
     *   code: string,
     *   link: string,
     *   points: int,
     *   referredCount: int,
     *   rates: PostV1AccountReferralGetResponseRates,
     *   history: array<PostV1AccountReferralGetResponseHistoryItem>,
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
