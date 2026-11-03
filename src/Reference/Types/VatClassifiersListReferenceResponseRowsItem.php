<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class VatClassifiersListReferenceResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $nameEn
     */
    #[JsonProperty('nameEn')]
    public ?string $nameEn;

    /**
     * @var ?string $ratePercent
     */
    #[JsonProperty('ratePercent')]
    public ?string $ratePercent;

    /**
     * @var value-of<VatClassifiersListReferenceResponseRowsItemSide> $side
     */
    #[JsonProperty('side')]
    public string $side;

    /**
     * @var ?value-of<VatClassifiersListReferenceResponseRowsItemScheme> $scheme
     */
    #[JsonProperty('scheme')]
    public ?string $scheme;

    /**
     * @var VatClassifiersListReferenceResponseRowsItemRateFromLine $rateFromLine
     */
    #[JsonProperty('rateFromLine')]
    public VatClassifiersListReferenceResponseRowsItemRateFromLine $rateFromLine;

    /**
     * @param array{
     *   code: string,
     *   countryCode: string,
     *   name: string,
     *   side: value-of<VatClassifiersListReferenceResponseRowsItemSide>,
     *   rateFromLine: VatClassifiersListReferenceResponseRowsItemRateFromLine,
     *   nameEn?: ?string,
     *   ratePercent?: ?string,
     *   scheme?: ?value-of<VatClassifiersListReferenceResponseRowsItemScheme>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->countryCode = $values['countryCode'];
        $this->name = $values['name'];
        $this->nameEn = $values['nameEn'] ?? null;
        $this->ratePercent = $values['ratePercent'] ?? null;
        $this->side = $values['side'];
        $this->scheme = $values['scheme'] ?? null;
        $this->rateFromLine = $values['rateFromLine'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
