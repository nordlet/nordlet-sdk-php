<?php

namespace Nordlet\Fleet\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1FleetAssignmentsCreateRequest extends JsonSerializableType
{
    /**
     * @var string $vehicleId
     */
    #[JsonProperty('vehicleId')]
    public string $vehicleId;

    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var ?string $toDate
     */
    #[JsonProperty('toDate')]
    public ?string $toDate;

    /**
     * @var ?bool $privateUse
     */
    #[JsonProperty('privateUse')]
    public ?bool $privateUse;

    /**
     * @var ?bool $employerPaysFuel
     */
    #[JsonProperty('employerPaysFuel')]
    public ?bool $employerPaysFuel;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   vehicleId: string,
     *   employeeId: string,
     *   fromDate: string,
     *   toDate?: ?string,
     *   privateUse?: ?bool,
     *   employerPaysFuel?: ?bool,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->vehicleId = $values['vehicleId'];
        $this->employeeId = $values['employeeId'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'] ?? null;
        $this->privateUse = $values['privateUse'] ?? null;
        $this->employerPaysFuel = $values['employerPaysFuel'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
