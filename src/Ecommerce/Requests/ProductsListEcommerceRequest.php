<?php

namespace Nordlet\Ecommerce\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ProductsListEcommerceRequest extends JsonSerializableType
{
    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var ?string $priceListId
     */
    #[JsonProperty('priceListId')]
    public ?string $priceListId;

    /**
     * @var ?DateTime $updatedSince
     */
    #[JsonProperty('updatedSince'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedSince;

    /**
     * @var ?int $page
     */
    #[JsonProperty('page')]
    public ?int $page;

    /**
     * @var ?int $pageSize
     */
    #[JsonProperty('pageSize')]
    public ?int $pageSize;

    /**
     * @param array{
     *   warehouseId?: ?string,
     *   priceListId?: ?string,
     *   updatedSince?: ?DateTime,
     *   page?: ?int,
     *   pageSize?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->priceListId = $values['priceListId'] ?? null;
        $this->updatedSince = $values['updatedSince'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->pageSize = $values['pageSize'] ?? null;
    }
}
