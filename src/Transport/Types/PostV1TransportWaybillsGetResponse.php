<?php

namespace Nordlet\Transport\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1TransportWaybillsGetResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1TransportWaybillsGetResponseStatus> $status
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
     * @var string $documentDate
     */
    #[JsonProperty('documentDate')]
    public string $documentDate;

    /**
     * @var string $dispatchAt
     */
    #[JsonProperty('dispatchAt')]
    public string $dispatchAt;

    /**
     * @var ?string $estimatedArrivalAt
     */
    #[JsonProperty('estimatedArrivalAt')]
    public ?string $estimatedArrivalAt;

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
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var array<PostV1TransportWaybillsGetResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1TransportWaybillsGetResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   status: value-of<PostV1TransportWaybillsGetResponseStatus>,
     *   series: string,
     *   documentDate: string,
     *   dispatchAt: string,
     *   consigneePartnerId: string,
     *   loadAddress: string,
     *   unloadAddress: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   lines: array<PostV1TransportWaybillsGetResponseLinesItem>,
     *   fullNumber?: ?string,
     *   estimatedArrivalAt?: ?string,
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
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
