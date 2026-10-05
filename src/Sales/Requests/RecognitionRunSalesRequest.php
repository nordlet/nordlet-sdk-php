<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class RecognitionRunSalesRequest extends JsonSerializableType
{
    /**
     * @var ?DateTime $asOfDate
     */
    #[JsonProperty('asOfDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $asOfDate;

    /**
     * @var ?DateTime $postingDate
     */
    #[JsonProperty('postingDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $postingDate;

    /**
     * @var ?array<string> $scheduleIds
     */
    #[JsonProperty('scheduleIds'), ArrayType(['string'])]
    public ?array $scheduleIds;

    /**
     * @param array{
     *   asOfDate?: ?DateTime,
     *   postingDate?: ?DateTime,
     *   scheduleIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->asOfDate = $values['asOfDate'] ?? null;
        $this->postingDate = $values['postingDate'] ?? null;
        $this->scheduleIds = $values['scheduleIds'] ?? null;
    }
}
