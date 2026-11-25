<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesSetDeclarationsResponseAnnexesAnnex6RelatedPartiesItem extends JsonSerializableType
{
    /**
     * @var string $registryCode
     */
    #[JsonProperty('registryCode')]
    public string $registryCode;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var string $typeCode
     */
    #[JsonProperty('typeCode')]
    public string $typeCode;

    /**
     * @param array{
     *   registryCode: string,
     *   name: string,
     *   country: string,
     *   amount: string,
     *   typeCode: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->registryCode = $values['registryCode'];
        $this->name = $values['name'];
        $this->country = $values['country'];
        $this->amount = $values['amount'];
        $this->typeCode = $values['typeCode'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
