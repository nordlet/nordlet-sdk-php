<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlKsefReceiptResponse extends JsonSerializableType
{
    /**
     * @var string $referenceNumber
     */
    #[JsonProperty('referenceNumber')]
    public string $referenceNumber;

    /**
     * @var value-of<PostV1DeclarationsPlKsefReceiptResponseState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?string $detail
     */
    #[JsonProperty('detail')]
    public ?string $detail;

    /**
     * @var ?int $invoiceCount
     */
    #[JsonProperty('invoiceCount')]
    public ?int $invoiceCount;

    /**
     * @var ?string $upoXml
     */
    #[JsonProperty('upoXml')]
    public ?string $upoXml;

    /**
     * @param array{
     *   referenceNumber: string,
     *   state: value-of<PostV1DeclarationsPlKsefReceiptResponseState>,
     *   detail?: ?string,
     *   invoiceCount?: ?int,
     *   upoXml?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->referenceNumber = $values['referenceNumber'];
        $this->state = $values['state'];
        $this->detail = $values['detail'] ?? null;
        $this->invoiceCount = $values['invoiceCount'] ?? null;
        $this->upoXml = $values['upoXml'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
