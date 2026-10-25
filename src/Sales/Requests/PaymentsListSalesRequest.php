<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class PaymentsListSalesRequest extends JsonSerializableType
{
    /**
     * @var DateTime $from
     */
    #[JsonProperty('from'), Date(Date::TYPE_DATE)]
    public DateTime $from;

    /**
     * @var DateTime $to
     */
    #[JsonProperty('to'), Date(Date::TYPE_DATE)]
    public DateTime $to;

    /**
     * @var ?int $page
     */
    #[JsonProperty('page')]
    public ?int $page;

    /**
     * @var ?int $pageSize
     */
    #[JsonProperty('pageSize')]
    public ?int $pageSize;

    /**
     * @param array{
     *   from: DateTime,
     *   to: DateTime,
     *   page?: ?int,
     *   pageSize?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
        $this->page = $values['page'] ?? null;
        $this->pageSize = $values['pageSize'] ?? null;
    }
}
