<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class IeRtdGenerateDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $rate
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $supplies
     */
    #[JsonProperty('supplies')]
    public string $supplies;

    /**
     * @var string $acquisitions
     */
    #[JsonProperty('acquisitions')]
    public string $acquisitions;

    /**
     * @var string $purchasesResale
     */
    #[JsonProperty('purchasesResale')]
    public string $purchasesResale;

    /**
     * @var string $purchasesNonResale
     */
    #[JsonProperty('purchasesNonResale')]
    public string $purchasesNonResale;

    /**
     * @param array{
     *   rate: string,
     *   label: string,
     *   supplies: string,
     *   acquisitions: string,
     *   purchasesResale: string,
     *   purchasesNonResale: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->rate = $values['rate'];
        $this->label = $values['label'];
        $this->supplies = $values['supplies'];
        $this->acquisitions = $values['acquisitions'];
        $this->purchasesResale = $values['purchasesResale'];
        $this->purchasesNonResale = $values['purchasesNonResale'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
