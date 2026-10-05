<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\EuVatRatesSetOverridesReferenceRequestRatesItem;
use Nordlet\Core\Types\ArrayType;

class EuVatRatesSetOverridesReferenceRequest extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var array<EuVatRatesSetOverridesReferenceRequestRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([EuVatRatesSetOverridesReferenceRequestRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   countryCode: string,
     *   rates: array<EuVatRatesSetOverridesReferenceRequestRatesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->rates = $values['rates'];
    }
}
