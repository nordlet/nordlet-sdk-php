<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceEuVatRatesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var value-of<PostV1ReferenceEuVatRatesListResponseRowsItemCategory> $category
     */
    #[JsonProperty('category')]
    public string $category;

    /**
     * @var string $ratePercent
     */
    #[JsonProperty('ratePercent')]
    public string $ratePercent;

    /**
     * @var ?string $validFrom
     */
    #[JsonProperty('validFrom')]
    public ?string $validFrom;

    /**
     * @var ?string $validTo
     */
    #[JsonProperty('validTo')]
    public ?string $validTo;

    /**
     * @param array{
     *   countryCode: string,
     *   category: value-of<PostV1ReferenceEuVatRatesListResponseRowsItemCategory>,
     *   ratePercent: string,
     *   validFrom?: ?string,
     *   validTo?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->category = $values['category'];
        $this->ratePercent = $values['ratePercent'];
        $this->validFrom = $values['validFrom'] ?? null;
        $this->validTo = $values['validTo'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
