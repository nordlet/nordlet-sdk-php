<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class IntercompanyReportConsolidationResponse extends JsonSerializableType
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
     * @var array<IntercompanyReportConsolidationResponseDirectionsItem> $directions
     */
    #[JsonProperty('directions'), ArrayType([IntercompanyReportConsolidationResponseDirectionsItem::class])]
    public array $directions;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   directions: array<IntercompanyReportConsolidationResponseDirectionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->directions = $values['directions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
