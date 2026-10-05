<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class StockAgingReportsRequest extends JsonSerializableType
{
    /**
     * @var DateTime $asOf
     */
    #[JsonProperty('asOf'), Date(Date::TYPE_DATE)]
    public DateTime $asOf;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @param array{
     *   asOf: DateTime,
     *   warehouseId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->asOf = $values['asOf'];
        $this->warehouseId = $values['warehouseId'] ?? null;
    }
}
