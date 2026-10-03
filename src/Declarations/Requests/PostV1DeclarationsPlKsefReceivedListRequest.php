<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class PostV1DeclarationsPlKsefReceivedListRequest extends JsonSerializableType
{
    /**
     * @var DateTime $from
     */
    #[JsonProperty('from'), Date(Date::TYPE_DATETIME)]
    public DateTime $from;

    /**
     * @var DateTime $to
     */
    #[JsonProperty('to'), Date(Date::TYPE_DATETIME)]
    public DateTime $to;

    /**
     * @var ?int $pageSize
     */
    #[JsonProperty('pageSize')]
    public ?int $pageSize;

    /**
     * @var ?int $pageOffset
     */
    #[JsonProperty('pageOffset')]
    public ?int $pageOffset;

    /**
     * @param array{
     *   from: DateTime,
     *   to: DateTime,
     *   pageSize?: ?int,
     *   pageOffset?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->pageSize = $values['pageSize'] ?? null;
        $this->pageOffset = $values['pageOffset'] ?? null;
    }
}
