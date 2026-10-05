<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Catalog\Types\ItemsKindsCreateCatalogRequestSaftType;

class ItemsKindsCreateCatalogRequest extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?value-of<ItemsKindsCreateCatalogRequestSaftType> $saftType
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
     *   code: string,
     *   name: string,
     *   saftType?: ?value-of<ItemsKindsCreateCatalogRequestSaftType>,
     *   quantityAccounting?: ?bool,
     *   sortOrder?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->saftType = $values['saftType'] ?? null;
        $this->quantityAccounting = $values['quantityAccounting'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
    }
}
