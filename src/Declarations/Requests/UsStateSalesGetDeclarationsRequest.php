<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class UsStateSalesGetDeclarationsRequest extends JsonSerializableType
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
     * @param array{
     *   from: DateTime,
     *   to: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
    }
}
