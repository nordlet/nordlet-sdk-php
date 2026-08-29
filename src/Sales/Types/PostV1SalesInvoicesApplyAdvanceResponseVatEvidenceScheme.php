<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesInvoicesApplyAdvanceResponseVatEvidenceScheme extends JsonSerializableType
{
    /**
     * @var ?string $vatScheme
     */
    #[JsonProperty('vatScheme')]
    public ?string $vatScheme;

    /**
     * @var ?string $vatCountryCode
     */
    #[JsonProperty('vatCountryCode')]
    public ?string $vatCountryCode;

    /**
     * @var bool $deemedSupplier
     */
    #[JsonProperty('deemedSupplier')]
    public bool $deemedSupplier;

    /**
     * @param array{
     *   deemedSupplier: bool,
     *   vatScheme?: ?string,
     *   vatCountryCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->vatScheme = $values['vatScheme'] ?? null;
        $this->vatCountryCode = $values['vatCountryCode'] ?? null;
        $this->deemedSupplier = $values['deemedSupplier'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
