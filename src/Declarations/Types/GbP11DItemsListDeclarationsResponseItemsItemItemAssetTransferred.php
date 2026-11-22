<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferred extends JsonSerializableType
{
    /**
     * @var value-of<GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferredAsset> $asset
     */
    #[JsonProperty('asset')]
    public string $asset;

    /**
     * @var ?string $otherDescription
     */
    #[JsonProperty('otherDescription')]
    public ?string $otherDescription;

    /**
     * @var string $cost
     */
    #[JsonProperty('cost')]
    public string $cost;

    /**
     * @var string $madeGood
     */
    #[JsonProperty('madeGood')]
    public string $madeGood;

    /**
     * @param array{
     *   asset: value-of<GbP11DItemsListDeclarationsResponseItemsItemItemAssetTransferredAsset>,
     *   cost: string,
     *   madeGood: string,
     *   otherDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->asset = $values['asset'];
        $this->otherDescription = $values['otherDescription'] ?? null;
        $this->cost = $values['cost'];
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
