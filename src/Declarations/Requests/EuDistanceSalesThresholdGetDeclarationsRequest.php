<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class EuDistanceSalesThresholdGetDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @param array{
     *   date?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->date = $values['date'] ?? null;
    }
}
