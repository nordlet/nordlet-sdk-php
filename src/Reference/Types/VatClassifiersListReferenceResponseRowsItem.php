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
     * @var ?string $ratePercent
     */
    #[JsonProperty('ratePercent')]
    public ?string $ratePercent;

    /**
     * @param array{
     *   code: string,
     *   countryCode: string,
     *   name: string,
     *   ratePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->countryCode = $values['countryCode'];
        $this->name = $values['name'];
        $this->ratePercent = $values['ratePercent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
