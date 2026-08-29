<?php

namespace Nordlet\Fleet\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Fleet\Types\PostV1FleetVehiclesCreateRequestFuelType;

class PostV1FleetVehiclesCreateRequest extends JsonSerializableType
{
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
     * @var ?value-of<PostV1FleetVehiclesCreateRequestFuelType> $fuelType
     */
    #[JsonProperty('fuelType')]
    public ?string $fuelType;

    /**
     * @var ?string $acquisitionDate
     */
    #[JsonProperty('acquisitionDate')]
    public ?string $acquisitionDate;

    /**
     * @var ?string $marketValue
     */
    #[JsonProperty('marketValue')]
    public ?string $marketValue;

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
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   plateNumber: string,
     *   make: string,
     *   model: string,
     *   year?: ?int,
     *   vin?: ?string,
     *   fuelType?: ?value-of<PostV1FleetVehiclesCreateRequestFuelType>,
     *   acquisitionDate?: ?string,
     *   marketValue?: ?string,
     *   fixedAssetId?: ?string,
     *   technicalInspectionDue?: ?string,
     *   insuranceDue?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->plateNumber = $values['plateNumber'];
        $this->make = $values['make'];
        $this->model = $values['model'];
        $this->year = $values['year'] ?? null;
        $this->vin = $values['vin'] ?? null;
        $this->fuelType = $values['fuelType'] ?? null;
        $this->acquisitionDate = $values['acquisitionDate'] ?? null;
        $this->marketValue = $values['marketValue'] ?? null;
        $this->fixedAssetId = $values['fixedAssetId'] ?? null;
        $this->technicalInspectionDue = $values['technicalInspectionDue'] ?? null;
        $this->insuranceDue = $values['insuranceDue'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
