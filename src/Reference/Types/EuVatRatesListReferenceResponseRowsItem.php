<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EuVatRatesListReferenceResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var value-of<EuVatRatesListReferenceResponseRowsItemCategory> $category
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
     * @var value-of<EuVatRatesListReferenceResponseRowsItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   countryCode: string,
     *   category: value-of<EuVatRatesListReferenceResponseRowsItemCategory>,
     *   ratePercent: string,
     *   source: value-of<EuVatRatesListReferenceResponseRowsItemSource>,
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
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
