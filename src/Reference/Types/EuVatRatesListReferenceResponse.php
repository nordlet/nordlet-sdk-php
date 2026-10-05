<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuVatRatesListReferenceResponse extends JsonSerializableType
{
    /**
     * @var string $notice
     */
    #[JsonProperty('notice')]
    public string $notice;

    /**
     * @var array<EuVatRatesListReferenceResponseRowsItem> $rows
     */
    #[JsonProperty('rows'), ArrayType([EuVatRatesListReferenceResponseRowsItem::class])]
    public array $rows;

    /**
     * @param array{
     *   notice: string,
     *   rows: array<EuVatRatesListReferenceResponseRowsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
