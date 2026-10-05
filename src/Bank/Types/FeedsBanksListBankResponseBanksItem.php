<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class FeedsBanksListBankResponseBanksItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var ?string $logoUrl
     */
    #[JsonProperty('logoUrl')]
    public ?string $logoUrl;

    /**
     * @var array<value-of<FeedsBanksListBankResponseBanksItemPsuTypesItem>> $psuTypes
     */
    #[JsonProperty('psuTypes'), ArrayType(['string'])]
    public array $psuTypes;

    /**
     * @var ?int $maxConsentDays
     */
    #[JsonProperty('maxConsentDays')]
    public ?int $maxConsentDays;

    /**
     * @param array{
     *   name: string,
     *   country: string,
     *   psuTypes: array<value-of<FeedsBanksListBankResponseBanksItemPsuTypesItem>>,
     *   logoUrl?: ?string,
     *   maxConsentDays?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->country = $values['country'];
        $this->logoUrl = $values['logoUrl'] ?? null;
        $this->psuTypes = $values['psuTypes'];
        $this->maxConsentDays = $values['maxConsentDays'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
