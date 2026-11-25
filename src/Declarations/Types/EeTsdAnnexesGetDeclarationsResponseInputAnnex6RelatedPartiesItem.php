<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesGetDeclarationsResponseInputAnnex6RelatedPartiesItem extends JsonSerializableType
{
    /**
     * @var string $registryCode 6200: registry code of the related person
     */
    #[JsonProperty('registryCode')]
    public string $registryCode;

    /**
     * @var string $name 6210
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $country 6220: ISO 3166-1 alpha-2 country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $amount 6230: taxable amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var value-of<EeTsdAnnexesGetDeclarationsResponseInputAnnex6RelatedPartiesItemTypeCode> $typeCode 6240: 621 transfer price, 6211 transfer price with a party under TuMS § 52¹, 622 income not received or cost not incurred, 623 hybrid mismatch (TuMS §§ 54⁷, 54⁸), 624 market value on a transfer to a tonnage unit
     */
    #[JsonProperty('typeCode')]
    public string $typeCode;

    /**
     * @param array{
     *   registryCode: string,
     *   name: string,
     *   country: string,
     *   amount: string,
     *   typeCode: value-of<EeTsdAnnexesGetDeclarationsResponseInputAnnex6RelatedPartiesItemTypeCode>,
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
