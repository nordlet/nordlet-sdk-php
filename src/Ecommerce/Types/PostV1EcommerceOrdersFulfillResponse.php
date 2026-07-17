<?php

namespace Nordlet\Ecommerce\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1EcommerceOrdersFulfillResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $channel
     */
    #[JsonProperty('channel')]
    public string $channel;

    /**
     * @var ?string $externalRef
     */
    #[JsonProperty('externalRef')]
    public ?string $externalRef;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var value-of<PostV1EcommerceOrdersFulfillResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $invoiceId
     */
    #[JsonProperty('invoiceId')]
    public ?string $invoiceId;

    /**
     * @var ?string $shipToCountryCode
     */
    #[JsonProperty('shipToCountryCode')]
    public ?string $shipToCountryCode;

    /**
     * @var ?string $marketplace
     */
    #[JsonProperty('marketplace')]
    public ?string $marketplace;

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
     * @var array<PostV1EcommerceOrdersFulfillResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1EcommerceOrdersFulfillResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   channel: string,
     *   partnerId: string,
     *   currency: string,
     *   status: value-of<PostV1EcommerceOrdersFulfillResponseStatus>,
     *   createdAt: string,
     *   lines: array<PostV1EcommerceOrdersFulfillResponseLinesItem>,
     *   externalRef?: ?string,
     *   warehouseId?: ?string,
     *   invoiceId?: ?string,
     *   shipToCountryCode?: ?string,
     *   marketplace?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->channel = $values['channel'];
        $this->externalRef = $values['externalRef'] ?? null;
        $this->partnerId = $values['partnerId'];
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->currency = $values['currency'];
        $this->status = $values['status'];
        $this->invoiceId = $values['invoiceId'] ?? null;
        $this->shipToCountryCode = $values['shipToCountryCode'] ?? null;
        $this->marketplace = $values['marketplace'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
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
