<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class RecognitionComputeSalesRequest extends JsonSerializableType
{
    /**
     * @var ?DateTime $asOfDate
     */
    #[JsonProperty('asOfDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $asOfDate;

    /**
     * @param array{
     *   asOfDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->asOfDate = $values['asOfDate'] ?? null;
    }
}
