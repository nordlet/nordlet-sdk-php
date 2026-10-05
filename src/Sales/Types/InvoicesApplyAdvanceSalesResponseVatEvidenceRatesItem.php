<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesApplyAdvanceSalesResponseVatEvidenceRatesItem extends JsonSerializableType
{
    /**
     * @var string $ratePercent
     */
    #[JsonProperty('ratePercent')]
    public string $ratePercent;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var ?string $category
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @param array{
     *   ratePercent: string,
     *   country: string,
     *   category?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ratePercent = $values['ratePercent'];
        $this->country = $values['country'];
        $this->category = $values['category'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
