<?php

namespace Nordlet\Fleet\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1FleetVehiclesUpdateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var ?int $year
     */
    #[JsonProperty('year')]
    public ?int $year;

    /**
     * @var ?string $vin
     */
    #[JsonProperty('vin')]
    public ?string $vin;

    /**
     * @var ?string $fuelType
     */
    #[JsonProperty('fuelType')]
    public ?string $fuelType;

    /**
     * @var ?string $acquisitionDate
     */
    #[JsonProperty('acquisitionDate')]
    public ?string $acquisitionDate;

    /**
     * @var string $marketValue
     */
    #[JsonProperty('marketValue')]
    public string $marketValue;

    /**
     * @var ?string $fixedAssetId
     */
    #[JsonProperty('fixedAssetId')]
    public ?string $fixedAssetId;

    /**
     * @var ?string $technicalInspectionDue
     */
    #[JsonProperty('technicalInspectionDue')]
    public ?string $technicalInspectionDue;

    /**
     * @var ?string $insuranceDue
     */
    #[JsonProperty('insuranceDue')]
    public ?string $insuranceDue;

    /**
     * @var value-of<PostV1FleetVehiclesUpdateResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?PostV1FleetVehiclesUpdateResponseCurrentAssignment $currentAssignment
     */
    #[JsonProperty('currentAssignment')]
    public ?PostV1FleetVehiclesUpdateResponseCurrentAssignment $currentAssignment;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   plateNumber: string,
     *   make: string,
     *   model: string,
     *   marketValue: string,
     *   status: value-of<PostV1FleetVehiclesUpdateResponseStatus>,
     *   createdAt: string,
     *   year?: ?int,
     *   vin?: ?string,
     *   fuelType?: ?string,
     *   acquisitionDate?: ?string,
     *   fixedAssetId?: ?string,
     *   technicalInspectionDue?: ?string,
     *   insuranceDue?: ?string,
     *   notes?: ?string,
     *   currentAssignment?: ?PostV1FleetVehiclesUpdateResponseCurrentAssignment,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->plateNumber = $values['plateNumber'];
        $this->make = $values['make'];
        $this->model = $values['model'];
        $this->year = $values['year'] ?? null;
        $this->vin = $values['vin'] ?? null;
        $this->fuelType = $values['fuelType'] ?? null;
        $this->acquisitionDate = $values['acquisitionDate'] ?? null;
        $this->marketValue = $values['marketValue'];
        $this->fixedAssetId = $values['fixedAssetId'] ?? null;
        $this->technicalInspectionDue = $values['technicalInspectionDue'] ?? null;
        $this->insuranceDue = $values['insuranceDue'] ?? null;
        $this->status = $values['status'];
        $this->notes = $values['notes'] ?? null;
        $this->currentAssignment = $values['currentAssignment'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
