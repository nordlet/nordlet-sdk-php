<?php

namespace Nordlet\Catalog\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ItemsSuppliersListCatalogRequest extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @param array{
     *   itemId?: ?string,
     *   partnerId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
    }
}
