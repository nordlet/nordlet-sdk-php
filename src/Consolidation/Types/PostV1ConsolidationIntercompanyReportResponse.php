<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ConsolidationIntercompanyReportResponse extends JsonSerializableType
{
    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var array<PostV1ConsolidationIntercompanyReportResponseDirectionsItem> $directions
     */
    #[JsonProperty('directions'), ArrayType([PostV1ConsolidationIntercompanyReportResponseDirectionsItem::class])]
    public array $directions;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   directions: array<PostV1ConsolidationIntercompanyReportResponseDirectionsItem>,
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
