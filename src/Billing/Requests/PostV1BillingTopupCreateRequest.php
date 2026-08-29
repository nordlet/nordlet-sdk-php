<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Billing\Types\PostV1BillingTopupCreateRequestLocale;

class PostV1BillingTopupCreateRequest extends JsonSerializableType
{
    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var ?value-of<PostV1BillingTopupCreateRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   amountCents: int,
     *   locale?: ?value-of<PostV1BillingTopupCreateRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amountCents = $values['amountCents'];
        $this->locale = $values['locale'] ?? null;
    }
}
