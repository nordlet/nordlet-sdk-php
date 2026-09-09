<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Catalog\Types\PostV1CatalogItemsKindsUpdateRequestSaftType;

class PostV1CatalogItemsKindsUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<PostV1CatalogItemsKindsUpdateRequestSaftType> $saftType
     */
    #[JsonProperty('saftType')]
    public ?string $saftType;

    /**
     * @var ?bool $quantityAccounting
     */
    #[JsonProperty('quantityAccounting')]
    public ?bool $quantityAccounting;

    /**
     * @var ?int $sortOrder
     */
    #[JsonProperty('sortOrder')]
    public ?int $sortOrder;

    /**
     * @param array{
     *   id: string,
     *   code?: ?string,
     *   name?: ?string,
     *   saftType?: ?value-of<PostV1CatalogItemsKindsUpdateRequestSaftType>,
     *   quantityAccounting?: ?bool,
     *   sortOrder?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->saftType = $values['saftType'] ?? null;
        $this->quantityAccounting = $values['quantityAccounting'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
    }
}
