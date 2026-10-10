<?php

namespace Nordlet\PlatformSellers\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UpdatePlatformSellersRequestTaxResidencesItem extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var ?string $tin
     */
    #[JsonProperty('tin')]
    public ?string $tin;

    /**
     * @param array{
     *   countryCode: string,
     *   tin?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->tin = $values['tin'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
