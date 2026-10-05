<?php

namespace Nordlet\Catalog\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ItemsKindsUpdateCatalogResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var value-of<ItemsKindsUpdateCatalogResponseSaftType> $saftType
     */
    #[JsonProperty('saftType')]
    public string $saftType;

    /**
     * @var bool $quantityAccounting
     */
    #[JsonProperty('quantityAccounting')]
    public bool $quantityAccounting;

    /**
     * @var int $sortOrder
     */
    #[JsonProperty('sortOrder')]
    public int $sortOrder;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   code: string,
     *   name: string,
     *   saftType: value-of<ItemsKindsUpdateCatalogResponseSaftType>,
     *   quantityAccounting: bool,
     *   sortOrder: int,
     *   createdAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->saftType = $values['saftType'];
        $this->quantityAccounting = $values['quantityAccounting'];
        $this->sortOrder = $values['sortOrder'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
