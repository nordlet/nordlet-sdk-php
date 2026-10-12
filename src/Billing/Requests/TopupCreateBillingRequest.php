<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Billing\Types\TopupCreateBillingRequestLocale;
use Nordlet\Billing\Types\TopupCreateBillingRequestReturnTo;

class TopupCreateBillingRequest extends JsonSerializableType
{
    /**
     * @var int $amountCents
     */
    #[JsonProperty('amountCents')]
    public int $amountCents;

    /**
     * @var ?value-of<TopupCreateBillingRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @var ?value-of<TopupCreateBillingRequestReturnTo> $returnTo
     */
    #[JsonProperty('returnTo')]
    public ?string $returnTo;

    /**
     * @param array{
     *   amountCents: int,
     *   locale?: ?value-of<TopupCreateBillingRequestLocale>,
     *   returnTo?: ?value-of<TopupCreateBillingRequestReturnTo>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amountCents = $values['amountCents'];
        $this->locale = $values['locale'] ?? null;
        $this->returnTo = $values['returnTo'] ?? null;
    }
}
