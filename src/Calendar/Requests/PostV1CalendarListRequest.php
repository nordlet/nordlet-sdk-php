<?php

namespace Nordlet\Calendar\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1CalendarListRequest extends JsonSerializableType
{
    /**
     * @var ?string $from
     */
    #[JsonProperty('from')]
    public ?string $from;

    /**
     * @var ?string $to
     */
    #[JsonProperty('to')]
    public ?string $to;

    /**
     * @var ?bool $includeDone
     */
    #[JsonProperty('includeDone')]
    public ?bool $includeDone;

    /**
     * @param array{
     *   from?: ?string,
     *   to?: ?string,
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
