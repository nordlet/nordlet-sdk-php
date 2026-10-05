<?php

namespace Nordlet\Cash\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class BalanceCashRequest extends JsonSerializableType
{
    /**
     * @var ?string $cashAccountCode
     */
    #[JsonProperty('cashAccountCode')]
    public ?string $cashAccountCode;

    /**
     * @var ?DateTime $asOf
     */
    #[JsonProperty('asOf'), Date(Date::TYPE_DATE)]
    public ?DateTime $asOf;

    /**
     * @param array{
     *   cashAccountCode?: ?string,
     *   asOf?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->cashAccountCode = $values['cashAccountCode'] ?? null;
        $this->asOf = $values['asOf'] ?? null;
    }
}
