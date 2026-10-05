<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LtFr0564ComputeDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $vatCode
     */
    #[JsonProperty('vatCode')]
    public string $vatCode;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $goods
     */
    #[JsonProperty('goods')]
    public string $goods;

    /**
     * @var string $triangular
     */
    #[JsonProperty('triangular')]
    public string $triangular;

    /**
     * @var string $services
     */
    #[JsonProperty('services')]
    public string $services;

    /**
     * @param array{
     *   vatCode: string,
     *   partnerName: string,
     *   countryCode: string,
     *   goods: string,
     *   triangular: string,
     *   services: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->vatCode = $values['vatCode'];
        $this->partnerName = $values['partnerName'];
        $this->countryCode = $values['countryCode'];
        $this->goods = $values['goods'];
        $this->triangular = $values['triangular'];
        $this->services = $values['services'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
