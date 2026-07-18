<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\PostV1ReferenceEuVatRatesSetOverridesRequestRatesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1ReferenceEuVatRatesSetOverridesRequest extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var array<PostV1ReferenceEuVatRatesSetOverridesRequestRatesItem> $rates
     */
    #[JsonProperty('rates'), ArrayType([PostV1ReferenceEuVatRatesSetOverridesRequestRatesItem::class])]
    public array $rates;

    /**
     * @param array{
     *   countryCode: string,
     *   rates: array<PostV1ReferenceEuVatRatesSetOverridesRequestRatesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->rates = $values['rates'];
    }
}
