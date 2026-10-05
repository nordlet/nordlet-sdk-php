<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class GlDetailReportsRequest extends JsonSerializableType
{
    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

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
     * @param array{
     *   accountCode: string,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountCode = $values['accountCode'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
    }
}
