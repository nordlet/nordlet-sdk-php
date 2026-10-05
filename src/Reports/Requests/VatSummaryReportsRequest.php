<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;
use Nordlet\Reports\Types\VatSummaryReportsRequestSide;

class VatSummaryReportsRequest extends JsonSerializableType
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
     * @var ?value-of<VatSummaryReportsRequestSide> $side
     */
    #[JsonProperty('side')]
    public ?string $side;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   side?: ?value-of<VatSummaryReportsRequestSide>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->side = $values['side'] ?? null;
    }
}
