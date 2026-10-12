<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Billing\Types\FlatRateCreateBillingRequestLocale;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Billing\Types\FlatRateCreateBillingRequestPlan;

class FlatRateCreateBillingRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<FlatRateCreateBillingRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @var ?value-of<FlatRateCreateBillingRequestPlan> $plan
     */
    #[JsonProperty('plan')]
    public ?string $plan;

    /**
     * @param array{
     *   locale?: ?value-of<FlatRateCreateBillingRequestLocale>,
     *   plan?: ?value-of<FlatRateCreateBillingRequestPlan>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->locale = $values['locale'] ?? null;
        $this->plan = $values['plan'] ?? null;
    }
}
