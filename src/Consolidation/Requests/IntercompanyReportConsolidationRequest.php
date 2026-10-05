<?php

namespace Nordlet\Consolidation\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class IntercompanyReportConsolidationRequest extends JsonSerializableType
{
    /**
     * @var string $groupId
     */
    #[JsonProperty('groupId')]
    public string $groupId;

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
     *   groupId: string,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
    }
}
