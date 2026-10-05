<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\ActsUpdateSalesRequestType;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Sales\Types\ActsUpdateSalesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class ActsUpdateSalesRequest extends JsonSerializableType
{
    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?value-of<ActsUpdateSalesRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?DateTime $documentDate
     */
    #[JsonProperty('documentDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $documentDate;

    /**
     * @var ?string $saleInvoiceId
     */
    #[JsonProperty('saleInvoiceId')]
    public ?string $saleInvoiceId;

    /**
     * @var ?string $transferredByName
     */
    #[JsonProperty('transferredByName')]
    public ?string $transferredByName;

    /**
     * @var ?string $transferredByTitle
     */
    #[JsonProperty('transferredByTitle')]
    public ?string $transferredByTitle;

    /**
     * @var ?string $acceptedByName
     */
    #[JsonProperty('acceptedByName')]
    public ?string $acceptedByName;

    /**
     * @var ?string $acceptedByTitle
     */
    #[JsonProperty('acceptedByTitle')]
    public ?string $acceptedByTitle;

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
     * @var ?array<ActsUpdateSalesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([ActsUpdateSalesRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   id: string,
     *   partnerId?: ?string,
     *   type?: ?value-of<ActsUpdateSalesRequestType>,
     *   documentDate?: ?DateTime,
     *   saleInvoiceId?: ?string,
     *   transferredByName?: ?string,
     *   transferredByTitle?: ?string,
     *   acceptedByName?: ?string,
     *   acceptedByTitle?: ?string,
     *   notes?: ?string,
     *   series?: ?string,
     *   lines?: ?array<ActsUpdateSalesRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->documentDate = $values['documentDate'] ?? null;
        $this->saleInvoiceId = $values['saleInvoiceId'] ?? null;
        $this->transferredByName = $values['transferredByName'] ?? null;
        $this->transferredByTitle = $values['transferredByTitle'] ?? null;
        $this->acceptedByName = $values['acceptedByName'] ?? null;
        $this->acceptedByTitle = $values['acceptedByTitle'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->series = $values['series'] ?? null;
        $this->lines = $values['lines'] ?? null;
        $this->id = $values['id'];
    }
}
