<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class PlKsefReceivedListDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $ksefReferenceNumber
     */
    #[JsonProperty('ksefReferenceNumber')]
    public string $ksefReferenceNumber;

    /**
     * @var ?string $invoiceNumber
     */
    #[JsonProperty('invoiceNumber')]
    public ?string $invoiceNumber;

    /**
     * @var ?string $issuerNip
     */
    #[JsonProperty('issuerNip')]
    public ?string $issuerNip;

    /**
     * @var ?DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $issueDate;

    /**
     * @var ?string $acquisitionTimestamp
     */
    #[JsonProperty('acquisitionTimestamp')]
    public ?string $acquisitionTimestamp;

    /**
     * @var ?string $grossAmount
     */
    #[JsonProperty('grossAmount')]
    public ?string $grossAmount;

    /**
     * @var ?string $purchaseInvoiceId
     */
    #[JsonProperty('purchaseInvoiceId')]
    public ?string $purchaseInvoiceId;

    /**
     * @param array{
     *   ksefReferenceNumber: string,
     *   invoiceNumber?: ?string,
     *   issuerNip?: ?string,
     *   issueDate?: ?DateTime,
     *   acquisitionTimestamp?: ?string,
     *   grossAmount?: ?string,
     *   purchaseInvoiceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ksefReferenceNumber = $values['ksefReferenceNumber'];
        $this->invoiceNumber = $values['invoiceNumber'] ?? null;
        $this->issuerNip = $values['issuerNip'] ?? null;
        $this->issueDate = $values['issueDate'] ?? null;
        $this->acquisitionTimestamp = $values['acquisitionTimestamp'] ?? null;
        $this->grossAmount = $values['grossAmount'] ?? null;
        $this->purchaseInvoiceId = $values['purchaseInvoiceId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
