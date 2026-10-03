<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlKsefReceivedFetchRequest extends JsonSerializableType
{
    /**
     * @var string $ksefNumber
     */
    #[JsonProperty('ksefNumber')]
    public string $ksefNumber;

    /**
     * @var ?string $purchaseInvoiceId
     */
    #[JsonProperty('purchaseInvoiceId')]
    public ?string $purchaseInvoiceId;

    /**
     * @param array{
     *   ksefNumber: string,
     *   purchaseInvoiceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ksefNumber = $values['ksefNumber'];
        $this->purchaseInvoiceId = $values['purchaseInvoiceId'] ?? null;
    }
}
