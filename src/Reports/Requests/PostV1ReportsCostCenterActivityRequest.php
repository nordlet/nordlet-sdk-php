<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReportsCostCenterActivityRequest extends JsonSerializableType
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
     * @var string $costCenterId
     */
    #[JsonProperty('costCenterId')]
    public string $costCenterId;

    /**
     * @param array{
     *   fromDate: string,
     *   toDate: string,
     *   costCenterId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->costCenterId = $values['costCenterId'];
    }
}
