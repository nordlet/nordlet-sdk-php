<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class SieReportsRequest extends JsonSerializableType
{
    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var ?bool $includeTransactions
     */
    #[JsonProperty('includeTransactions')]
    public ?bool $includeTransactions;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   includeTransactions?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->includeTransactions = $values['includeTransactions'] ?? null;
    }
}
