<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class DatevReportsRequest extends JsonSerializableType
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
     * @var ?string $consultantNumber
     */
    #[JsonProperty('consultantNumber')]
    public ?string $consultantNumber;

    /**
     * @var ?string $clientNumber
     */
    #[JsonProperty('clientNumber')]
    public ?string $clientNumber;

    /**
     * @param array{
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   consultantNumber?: ?string,
     *   clientNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->consultantNumber = $values['consultantNumber'] ?? null;
        $this->clientNumber = $values['clientNumber'] ?? null;
    }
}
