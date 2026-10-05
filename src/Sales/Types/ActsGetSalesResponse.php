<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class ActsGetSalesResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var value-of<ActsGetSalesResponseType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<ActsGetSalesResponseStatus> $status
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
     * @var array<ActsGetSalesResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([ActsGetSalesResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   type: value-of<ActsGetSalesResponseType>,
     *   status: value-of<ActsGetSalesResponseStatus>,
     *   series: string,
     *   documentDate: DateTime,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   lines: array<ActsGetSalesResponseLinesItem>,
     *   fullNumber?: ?string,
     *   saleInvoiceId?: ?string,
     *   transferredByName?: ?string,
     *   transferredByTitle?: ?string,
     *   acceptedByName?: ?string,
     *   acceptedByTitle?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'];
        $this->type = $values['type'];
        $this->status = $values['status'];
        $this->series = $values['series'];
        $this->fullNumber = $values['fullNumber'] ?? null;
        $this->documentDate = $values['documentDate'];
        $this->saleInvoiceId = $values['saleInvoiceId'] ?? null;
        $this->transferredByName = $values['transferredByName'] ?? null;
        $this->transferredByTitle = $values['transferredByTitle'] ?? null;
        $this->acceptedByName = $values['acceptedByName'] ?? null;
        $this->acceptedByTitle = $values['acceptedByTitle'] ?? null;
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
