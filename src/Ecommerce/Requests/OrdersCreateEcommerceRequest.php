<?php

namespace Nordlet\Ecommerce\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ecommerce\Types\OrdersCreateEcommerceRequestPartner;
use Nordlet\Ecommerce\Types\OrdersCreateEcommerceRequestLinesItem;
use Nordlet\Core\Types\ArrayType;

class OrdersCreateEcommerceRequest extends JsonSerializableType
{
    /**
     * @var ?string $channel
     */
    #[JsonProperty('channel')]
    public ?string $channel;

    /**
     * @var ?string $externalRef
     */
    #[JsonProperty('externalRef')]
    public ?string $externalRef;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?OrdersCreateEcommerceRequestPartner $partner
     */
    #[JsonProperty('partner')]
    public ?OrdersCreateEcommerceRequestPartner $partner;

    /**
     * @var ?string $warehouseId
     */
    #[JsonProperty('warehouseId')]
    public ?string $warehouseId;

    /**
     * @var ?string $currency
     */
    #[JsonProperty('currency')]
    public ?string $currency;

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
     * @var array<OrdersCreateEcommerceRequestLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([OrdersCreateEcommerceRequestLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   lines: array<OrdersCreateEcommerceRequestLinesItem>,
     *   channel?: ?string,
     *   externalRef?: ?string,
     *   partnerId?: ?string,
     *   partner?: ?OrdersCreateEcommerceRequestPartner,
     *   warehouseId?: ?string,
     *   currency?: ?string,
     *   shipToCountryCode?: ?string,
     *   marketplace?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->channel = $values['channel'] ?? null;
        $this->externalRef = $values['externalRef'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
        $this->partner = $values['partner'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->shipToCountryCode = $values['shipToCountryCode'] ?? null;
        $this->marketplace = $values['marketplace'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->lines = $values['lines'];
    }
}
