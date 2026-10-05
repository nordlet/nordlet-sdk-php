<?php

namespace Nordlet\Transport\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class WaybillsCancelTransportResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<WaybillsCancelTransportResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $series
     */
    #[JsonProperty('series')]
    public string $series;

    /**
     * @var ?string $fullNumber
     */
    #[JsonProperty('fullNumber')]
    public ?string $fullNumber;

    /**
     * @var DateTime $documentDate
     */
    #[JsonProperty('documentDate'), Date(Date::TYPE_DATE)]
    public DateTime $documentDate;

    /**
     * @var DateTime $dispatchAt
     */
    #[JsonProperty('dispatchAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $dispatchAt;

    /**
     * @var ?DateTime $estimatedArrivalAt
     */
    #[JsonProperty('estimatedArrivalAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $estimatedArrivalAt;

    /**
     * @var string $consigneePartnerId
     */
    #[JsonProperty('consigneePartnerId')]
    public string $consigneePartnerId;

    /**
     * @var ?string $transporterPartnerId
     */
    #[JsonProperty('transporterPartnerId')]
    public ?string $transporterPartnerId;

    /**
     * @var ?string $vehiclePlate
     */
    #[JsonProperty('vehiclePlate')]
    public ?string $vehiclePlate;

    /**
     * @var ?string $trailerPlate
     */
    #[JsonProperty('trailerPlate')]
    public ?string $trailerPlate;

    /**
     * @var ?string $driverName
     */
    #[JsonProperty('driverName')]
    public ?string $driverName;

    /**
     * @var ?string $driverSurname
     */
    #[JsonProperty('driverSurname')]
    public ?string $driverSurname;

    /**
     * @var ?string $loadWarehouseId
     */
    #[JsonProperty('loadWarehouseId')]
    public ?string $loadWarehouseId;

    /**
     * @var string $loadAddress
     */
    #[JsonProperty('loadAddress')]
    public string $loadAddress;

    /**
     * @var string $unloadAddress
     */
    #[JsonProperty('unloadAddress')]
    public string $unloadAddress;

    /**
     * @var ?string $valueEur
     */
    #[JsonProperty('valueEur')]
    public ?string $valueEur;

    /**
     * @var ?string $saleInvoiceId
     */
    #[JsonProperty('saleInvoiceId')]
    public ?string $saleInvoiceId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   status: value-of<WaybillsCancelTransportResponseStatus>,
     *   series: string,
     *   documentDate: DateTime,
     *   dispatchAt: DateTime,
     *   consigneePartnerId: string,
     *   loadAddress: string,
     *   unloadAddress: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   fullNumber?: ?string,
     *   estimatedArrivalAt?: ?DateTime,
     *   transporterPartnerId?: ?string,
     *   vehiclePlate?: ?string,
     *   trailerPlate?: ?string,
     *   driverName?: ?string,
     *   driverSurname?: ?string,
     *   loadWarehouseId?: ?string,
     *   valueEur?: ?string,
     *   saleInvoiceId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->status = $values['status'];
        $this->series = $values['series'];
        $this->fullNumber = $values['fullNumber'] ?? null;
        $this->documentDate = $values['documentDate'];
        $this->dispatchAt = $values['dispatchAt'];
        $this->estimatedArrivalAt = $values['estimatedArrivalAt'] ?? null;
        $this->consigneePartnerId = $values['consigneePartnerId'];
        $this->transporterPartnerId = $values['transporterPartnerId'] ?? null;
        $this->vehiclePlate = $values['vehiclePlate'] ?? null;
        $this->trailerPlate = $values['trailerPlate'] ?? null;
        $this->driverName = $values['driverName'] ?? null;
        $this->driverSurname = $values['driverSurname'] ?? null;
        $this->loadWarehouseId = $values['loadWarehouseId'] ?? null;
        $this->loadAddress = $values['loadAddress'];
        $this->unloadAddress = $values['unloadAddress'];
        $this->valueEur = $values['valueEur'] ?? null;
        $this->saleInvoiceId = $values['saleInvoiceId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
