<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReferenceEuVatRatesSetOverridesResponse extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var value-of<PostV1ReferenceEuVatRatesSetOverridesResponseSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var string $notice
     */
    #[JsonProperty('notice')]
    public string $notice;

    /**
     * @var array<PostV1ReferenceEuVatRatesSetOverridesResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([PostV1ReferenceEuVatRatesSetOverridesResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   countryCode: string,
     *   source: value-of<PostV1ReferenceEuVatRatesSetOverridesResponseSource>,
     *   notice: string,
     *   rows: array<PostV1ReferenceEuVatRatesSetOverridesResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->source = $values['source'];
        $this->notice = $values['notice'];
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
