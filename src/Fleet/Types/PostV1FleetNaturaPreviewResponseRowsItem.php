<?php

namespace Nordlet\Fleet\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1FleetNaturaPreviewResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var string $employeeName
     */
    #[JsonProperty('employeeName')]
    public string $employeeName;

    /**
     * @var string $vehicleId
     */
    #[JsonProperty('vehicleId')]
    public string $vehicleId;

    /**
     * @var string $plateNumber
     */
    #[JsonProperty('plateNumber')]
    public string $plateNumber;

    /**
     * @var string $make
     */
    #[JsonProperty('make')]
    public string $make;

    /**
     * @var string $model
     */
    #[JsonProperty('model')]
    public string $model;

    /**
     * @var string $marketValue
     */
    #[JsonProperty('marketValue')]
    public string $marketValue;

    /**
     * @var bool $employerPaysFuel
     */
    #[JsonProperty('employerPaysFuel')]
    public bool $employerPaysFuel;

    /**
     * @var string $ratePercent
     */
    #[JsonProperty('ratePercent')]
    public string $ratePercent;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   employeeId: string,
     *   employeeName: string,
     *   vehicleId: string,
     *   plateNumber: string,
     *   make: string,
     *   model: string,
     *   marketValue: string,
     *   employerPaysFuel: bool,
     *   ratePercent: string,
     *   amount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->employeeName = $values['employeeName'];
        $this->vehicleId = $values['vehicleId'];
        $this->plateNumber = $values['plateNumber'];
        $this->make = $values['make'];
        $this->model = $values['model'];
        $this->marketValue = $values['marketValue'];
        $this->employerPaysFuel = $values['employerPaysFuel'];
        $this->ratePercent = $values['ratePercent'];
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
