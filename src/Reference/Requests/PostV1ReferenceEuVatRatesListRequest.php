<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceEuVatRatesListRequest extends JsonSerializableType
{
    /**
     * @var ?string $countryCode
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var ?string $date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @param array{
     *   countryCode?: ?string,
     *   date?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->countryCode = $values['countryCode'] ?? null;
        $this->date = $values['date'] ?? null;
    }
}
