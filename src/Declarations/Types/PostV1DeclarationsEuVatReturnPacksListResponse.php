<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsEuVatReturnPacksListResponse extends JsonSerializableType
{
    /**
     * @var array<PostV1DeclarationsEuVatReturnPacksListResponsePacksItem> $packs
     */
    #[JsonProperty('packs'), ArrayType([PostV1DeclarationsEuVatReturnPacksListResponsePacksItem::class])]
    public array $packs;

    /**
     * @param array{
     *   packs: array<PostV1DeclarationsEuVatReturnPacksListResponsePacksItem>,
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
