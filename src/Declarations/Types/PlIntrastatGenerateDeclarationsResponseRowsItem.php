<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PlIntrastatGenerateDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var int $itemNumber
     */
    #[JsonProperty('itemNumber')]
    public int $itemNumber;

    /**
     * @var string $cnCode
     */
    #[JsonProperty('cnCode')]
    public string $cnCode;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var ?string $originCountry
     */
    #[JsonProperty('originCountry')]
    public ?string $originCountry;

    /**
     * @var ?string $partnerVat
     */
    #[JsonProperty('partnerVat')]
    public ?string $partnerVat;

    /**
     * @var string $transactionNature
     */
    #[JsonProperty('transactionNature')]
    public string $transactionNature;

    /**
     * @var ?string $transportMode
     */
    #[JsonProperty('transportMode')]
    public ?string $transportMode;

    /**
     * @var ?string $deliveryTerms
     */
    #[JsonProperty('deliveryTerms')]
    public ?string $deliveryTerms;

    /**
     * @var ?string $netMassKg
     */
    #[JsonProperty('netMassKg')]
    public ?string $netMassKg;

    /**
     * @var ?string $supplementaryUnit
     */
    #[JsonProperty('supplementaryUnit')]
    public ?string $supplementaryUnit;

    /**
     * @var ?string $supplementaryQty
     */
    #[JsonProperty('supplementaryQty')]
    public ?string $supplementaryQty;

    /**
     * @var string $invoicedValue
     */
    #[JsonProperty('invoicedValue')]
    public string $invoicedValue;

    /**
     * @var ?string $statisticalValue
     */
    #[JsonProperty('statisticalValue')]
    public ?string $statisticalValue;

    /**
     * @param array{
     *   itemNumber: int,
     *   cnCode: string,
     *   countryCode: string,
     *   transactionNature: string,
     *   invoicedValue: string,
     *   description?: ?string,
     *   originCountry?: ?string,
     *   partnerVat?: ?string,
     *   transportMode?: ?string,
     *   deliveryTerms?: ?string,
     *   netMassKg?: ?string,
     *   supplementaryUnit?: ?string,
     *   supplementaryQty?: ?string,
     *   statisticalValue?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemNumber = $values['itemNumber'];
        $this->cnCode = $values['cnCode'];
        $this->description = $values['description'] ?? null;
        $this->countryCode = $values['countryCode'];
        $this->originCountry = $values['originCountry'] ?? null;
        $this->partnerVat = $values['partnerVat'] ?? null;
        $this->transactionNature = $values['transactionNature'];
        $this->transportMode = $values['transportMode'] ?? null;
        $this->deliveryTerms = $values['deliveryTerms'] ?? null;
        $this->netMassKg = $values['netMassKg'] ?? null;
        $this->supplementaryUnit = $values['supplementaryUnit'] ?? null;
        $this->supplementaryQty = $values['supplementaryQty'] ?? null;
        $this->invoicedValue = $values['invoicedValue'];
        $this->statisticalValue = $values['statisticalValue'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
