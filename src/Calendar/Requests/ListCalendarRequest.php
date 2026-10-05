<?php

namespace Nordlet\Calendar\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class ListCalendarRequest extends JsonSerializableType
{
    /**
     * @var ?DateTime $from
     */
    #[JsonProperty('from'), Date(Date::TYPE_DATE)]
    public ?DateTime $from;

    /**
     * @var ?DateTime $to
     */
    #[JsonProperty('to'), Date(Date::TYPE_DATE)]
    public ?DateTime $to;

    /**
     * @var ?bool $includeDone
     */
    #[JsonProperty('includeDone')]
    public ?bool $includeDone;

    /**
     * @param array{
     *   from?: ?DateTime,
     *   to?: ?DateTime,
     *   includeDone?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->from = $values['from'] ?? null;
        $this->to = $values['to'] ?? null;
        $this->includeDone = $values['includeDone'] ?? null;
    }
}
