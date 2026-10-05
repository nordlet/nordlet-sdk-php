<?php

namespace Nordlet\Transport\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Transport\Types\WaybillsUpdateTransportRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class WaybillsUpdateTransportRequest extends JsonSerializableType
{
    /**
     * @var ?string $consigneePartnerId
     */
    #[JsonProperty('consigneePartnerId')]
    public ?string $consigneePartnerId;

    /**
     * @var ?string $transporterPartnerId
     */
    #[JsonProperty('transporterPartnerId')]
    public ?string $transporterPartnerId;

    /**
     * @var ?DateTime $documentDate
     */
    #[JsonProperty('documentDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $documentDate;

    /**
     * @var ?DateTime $dispatchAt
     */
    #[JsonProperty('dispatchAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $dispatchAt;

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
     * @var ?string $loadAddress
     */
    #[JsonProperty('loadAddress')]
    public ?string $loadAddress;

    /**
     * @var ?string $unloadAddress
     */
    #[JsonProperty('unloadAddress')]
    public ?string $unloadAddress;

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
     * @var ?array<WaybillsUpdateTransportRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([WaybillsUpdateTransportRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   id: string,
     *   consigneePartnerId?: ?string,
     *   transporterPartnerId?: ?string,
     *   documentDate?: ?DateTime,
     *   dispatchAt?: ?DateTime,
     *   estimatedArrivalAt?: ?DateTime,
     *   vehiclePlate?: ?string,
     *   trailerPlate?: ?string,
     *   driverName?: ?string,
     *   driverSurname?: ?string,
     *   loadWarehouseId?: ?string,
     *   loadAddress?: ?string,
     *   unloadAddress?: ?string,
     *   valueEur?: ?string,
     *   saleInvoiceId?: ?string,
     *   notes?: ?string,
     *   series?: ?string,
     *   lines?: ?array<WaybillsUpdateTransportRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->consigneePartnerId = $values['consigneePartnerId'] ?? null;
        $this->transporterPartnerId = $values['transporterPartnerId'] ?? null;
        $this->documentDate = $values['documentDate'] ?? null;
        $this->dispatchAt = $values['dispatchAt'] ?? null;
        $this->estimatedArrivalAt = $values['estimatedArrivalAt'] ?? null;
        $this->vehiclePlate = $values['vehiclePlate'] ?? null;
        $this->trailerPlate = $values['trailerPlate'] ?? null;
        $this->driverName = $values['driverName'] ?? null;
        $this->driverSurname = $values['driverSurname'] ?? null;
        $this->loadWarehouseId = $values['loadWarehouseId'] ?? null;
        $this->loadAddress = $values['loadAddress'] ?? null;
        $this->unloadAddress = $values['unloadAddress'] ?? null;
        $this->valueEur = $values['valueEur'] ?? null;
        $this->saleInvoiceId = $values['saleInvoiceId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->series = $values['series'] ?? null;
        $this->lines = $values['lines'] ?? null;
        $this->id = $values['id'];
    }
}
