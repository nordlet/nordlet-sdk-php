<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesInvoicesGetResponseVatEvidenceLocation extends JsonSerializableType
{
    /**
     * @var ?string $billingCountryCode
     */
    #[JsonProperty('billingCountryCode')]
    public ?string $billingCountryCode;

    /**
     * @var ?string $source
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   billingCountryCode?: ?string,
     *   source?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->billingCountryCode = $values['billingCountryCode'] ?? null;
        $this->source = $values['source'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
