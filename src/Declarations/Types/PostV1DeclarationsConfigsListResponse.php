<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsConfigsListResponse extends JsonSerializableType
{
    /**
     * @var string $companyCountry
     */
    #[JsonProperty('companyCountry')]
    public string $companyCountry;

    /**
     * @var array<PostV1DeclarationsConfigsListResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1DeclarationsConfigsListResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   companyCountry: string,
     *   rows: array<PostV1DeclarationsConfigsListResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyCountry = $values['companyCountry'];
        $this->rows = $values['rows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
