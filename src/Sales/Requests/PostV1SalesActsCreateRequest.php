<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\PostV1SalesActsCreateRequestType;
use Nordlet\Sales\Types\PostV1SalesActsCreateRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesActsCreateRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?value-of<PostV1SalesActsCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $documentDate
     */
    #[JsonProperty('documentDate')]
    public ?string $documentDate;

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
     * @var ?array<PostV1SalesActsCreateRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1SalesActsCreateRequestLinesItem::class])]
    public ?array $lines;

    /**
     * @param array{
     *   partnerId: string,
     *   type?: ?value-of<PostV1SalesActsCreateRequestType>,
     *   documentDate?: ?string,
     *   saleInvoiceId?: ?string,
     *   transferredByName?: ?string,
     *   transferredByTitle?: ?string,
     *   acceptedByName?: ?string,
     *   acceptedByTitle?: ?string,
     *   notes?: ?string,
     *   series?: ?string,
     *   lines?: ?array<PostV1SalesActsCreateRequestLinesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
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
    }
}
