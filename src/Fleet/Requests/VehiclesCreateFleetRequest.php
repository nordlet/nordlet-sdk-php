<?php

namespace Nordlet\Fleet\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Fleet\Types\VehiclesCreateFleetRequestFuelType;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Fleet\Types\VehiclesCreateFleetRequestDocumentsItem;
use Nordlet\Core\Types\ArrayType;

class VehiclesCreateFleetRequest extends JsonSerializableType
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
     * @var ?value-of<VehiclesCreateFleetRequestFuelType> $fuelType
     */
    #[JsonProperty('fuelType')]
    public ?string $fuelType;

    /**
     * @var ?DateTime $acquisitionDate
     */
    #[JsonProperty('acquisitionDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $acquisitionDate;

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
     * @var ?DateTime $technicalInspectionDue
     */
    #[JsonProperty('technicalInspectionDue'), Date(Date::TYPE_DATE)]
    public ?DateTime $technicalInspectionDue;

    /**
     * @var ?DateTime $insuranceDue
     */
    #[JsonProperty('insuranceDue'), Date(Date::TYPE_DATE)]
    public ?DateTime $insuranceDue;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?array<VehiclesCreateFleetRequestDocumentsItem> $documents
     */
    #[JsonProperty('documents'), ArrayType([VehiclesCreateFleetRequestDocumentsItem::class])]
    public ?array $documents;

    /**
     * @param array{
     *   plateNumber: string,
     *   make: string,
     *   model: string,
     *   year?: ?int,
     *   vin?: ?string,
     *   fuelType?: ?value-of<VehiclesCreateFleetRequestFuelType>,
     *   acquisitionDate?: ?DateTime,
     *   marketValue?: ?string,
     *   fixedAssetId?: ?string,
     *   technicalInspectionDue?: ?DateTime,
     *   insuranceDue?: ?DateTime,
     *   notes?: ?string,
     *   documents?: ?array<VehiclesCreateFleetRequestDocumentsItem>,
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
        $this->documents = $values['documents'] ?? null;
    }
}
