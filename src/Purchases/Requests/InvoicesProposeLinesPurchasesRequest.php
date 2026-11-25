<?php

namespace Nordlet\Purchases\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Purchases\Types\InvoicesProposeLinesPurchasesRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class InvoicesProposeLinesPurchasesRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?DateTime $documentDate
     */
    #[JsonProperty('documentDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $documentDate;

    /**
     * @var array<InvoicesProposeLinesPurchasesRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([InvoicesProposeLinesPurchasesRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   partnerId: string,
     *   lines: array<InvoicesProposeLinesPurchasesRequestLinesItem>,
     *   documentDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
        $this->documentDate = $values['documentDate'] ?? null;
        $this->lines = $values['lines'];
    }
}
