<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsCreateDeclarationsRequestItemAssetAvailable extends JsonSerializableType
{
    /**
     * @var value-of<GbP11DItemsCreateDeclarationsRequestItemAssetAvailableAsset> $asset
     */
    #[JsonProperty('asset')]
    public string $asset;

    /**
     * @var ?string $otherDescription
     */
    #[JsonProperty('otherDescription')]
    public ?string $otherDescription;

    /**
     * @var string $annualValue
     */
    #[JsonProperty('annualValue')]
    public string $annualValue;

    /**
     * @var string $madeGood
     */
    #[JsonProperty('madeGood')]
    public string $madeGood;

    /**
     * @param array{
     *   asset: value-of<GbP11DItemsCreateDeclarationsRequestItemAssetAvailableAsset>,
     *   annualValue: string,
     *   madeGood: string,
     *   otherDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->asset = $values['asset'];
        $this->otherDescription = $values['otherDescription'] ?? null;
        $this->annualValue = $values['annualValue'];
        $this->madeGood = $values['madeGood'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
