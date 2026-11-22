<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UsSalesTaxGetDeclarationsResponseJurisdictionsItem extends JsonSerializableType
{
    /**
     * @var string $jurisdiction
     */
    #[JsonProperty('jurisdiction')]
    public string $jurisdiction;

    /**
     * @var float $documents
     */
    #[JsonProperty('documents')]
    public float $documents;

    /**
     * @var string $taxableSales
     */
    #[JsonProperty('taxableSales')]
    public string $taxableSales;

    /**
     * @var string $exemptSales
     */
    #[JsonProperty('exemptSales')]
    public string $exemptSales;

    /**
     * @var string $salesTax
     */
    #[JsonProperty('salesTax')]
    public string $salesTax;

    /**
     * @param array{
     *   jurisdiction: string,
     *   documents: float,
     *   taxableSales: string,
     *   exemptSales: string,
     *   salesTax: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->jurisdiction = $values['jurisdiction'];
        $this->documents = $values['documents'];
        $this->taxableSales = $values['taxableSales'];
        $this->exemptSales = $values['exemptSales'];
        $this->salesTax = $values['salesTax'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
