<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Reports\Types\DebtAgingReportsRequestSide;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class DebtAgingReportsRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<DebtAgingReportsRequestSide> $side
     */
    #[JsonProperty('side')]
    public ?string $side;

    /**
     * @var ?DateTime $asOf
     */
    #[JsonProperty('asOf'), Date(Date::TYPE_DATE)]
    public ?DateTime $asOf;

    /**
     * @param array{
     *   side?: ?value-of<DebtAgingReportsRequestSide>,
     *   asOf?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->side = $values['side'] ?? null;
        $this->asOf = $values['asOf'] ?? null;
    }
}
