<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuVatReturnPacksListDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var array<EuVatReturnPacksListDeclarationsResponsePacksItem> $packs
     */
    #[JsonProperty('packs'), ArrayType([EuVatReturnPacksListDeclarationsResponsePacksItem::class])]
    public array $packs;

    /**
     * @param array{
     *   packs: array<EuVatReturnPacksListDeclarationsResponsePacksItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->packs = $values['packs'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
