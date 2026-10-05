<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Billing\Types\PortalCreateBillingRequestLocale;
use Nordlet\Core\Json\JsonProperty;

class PortalCreateBillingRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PortalCreateBillingRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   locale?: ?value-of<PortalCreateBillingRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->locale = $values['locale'] ?? null;
    }
}
