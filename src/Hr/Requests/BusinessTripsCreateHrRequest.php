<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class BusinessTripsCreateHrRequest extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $destinationCountryCode
     */
    #[JsonProperty('destinationCountryCode')]
    public string $destinationCountryCode;

    /**
     * @var string $purpose
     */
    #[JsonProperty('purpose')]
    public string $purpose;

    /**
     * @var DateTime $startDate
     */
    #[JsonProperty('startDate'), Date(Date::TYPE_DATE)]
    public DateTime $startDate;

    /**
     * @var DateTime $endDate
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATE)]
    public DateTime $endDate;

    /**
     * @param array{
     *   employeeId: string,
     *   destinationCountryCode: string,
     *   purpose: string,
     *   startDate: DateTime,
     *   endDate: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->destinationCountryCode = $values['destinationCountryCode'];
        $this->purpose = $values['purpose'];
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
    }
}
