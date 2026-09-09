<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Billing\Types\PostV1BillingPortalCreateRequestLocale;
use Nordlet\Core\Json\JsonProperty;

class PostV1BillingPortalCreateRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PostV1BillingPortalCreateRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   locale?: ?value-of<PostV1BillingPortalCreateRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->locale = $values['locale'] ?? null;
    }
}
