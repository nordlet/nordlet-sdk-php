<?php

namespace Nordlet\Transport\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Transport\Types\PostV1TransportWaybillsCreateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1TransportWaybillsCreateRequest extends JsonSerializableType
{
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
     * @var ?string $documentDate
     */
    #[JsonProperty('documentDate')]
    public ?string $documentDate;

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
     * @var ?string $series
     */
    #[JsonProperty('series')]
    public ?string $series;

    /**
     * @var ?array<PostV1TransportWaybillsCreateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1TransportWaybillsCreateRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   consigneePartnerId: string,
     *   dispatchAt: DateTime,
     *   loadAddress: string,
     *   unloadAddress: string,
     *   transporterPartnerId?: ?string,
     *   documentDate?: ?string,
     *   estimatedArrivalAt?: ?DateTime,
     *   vehiclePlate?: ?string,
     *   trailerPlate?: ?string,
     *   driverName?: ?string,
     *   driverSurname?: ?string,
     *   loadWarehouseId?: ?string,
     *   valueEur?: ?string,
     *   saleInvoiceId?: ?string,
     *   notes?: ?string,
     *   series?: ?string,
     *   lines?: ?array<PostV1TransportWaybillsCreateRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->consigneePartnerId = $values['consigneePartnerId'];
        $this->transporterPartnerId = $values['transporterPartnerId'] ?? null;
        $this->documentDate = $values['documentDate'] ?? null;
        $this->dispatchAt = $values['dispatchAt'];
        $this->estimatedArrivalAt = $values['estimatedArrivalAt'] ?? null;
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
        $this->series = $values['series'] ?? null;
        $this->lines = $values['lines'] ?? null;
    }
}
