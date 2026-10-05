<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class PlJpkMagGenerateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var DateTime $dateFrom
     */
    #[JsonProperty('dateFrom'), Date(Date::TYPE_DATE)]
    public DateTime $dateFrom;

    /**
     * @var DateTime $dateTo
     */
    #[JsonProperty('dateTo'), Date(Date::TYPE_DATE)]
    public DateTime $dateTo;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @param array{
     *   dateFrom: DateTime,
     *   dateTo: DateTime,
     *   warehouseId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dateFrom = $values['dateFrom'];
        $this->dateTo = $values['dateTo'];
        $this->warehouseId = $values['warehouseId'] ?? null;
    }
}
