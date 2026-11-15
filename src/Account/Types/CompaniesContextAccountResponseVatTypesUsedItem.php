<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CompaniesContextAccountResponseVatTypesUsedItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $ratePercent
     */
    #[JsonProperty('ratePercent')]
    public ?string $ratePercent;

    /**
     * @var int $saleLines
     */
    #[JsonProperty('saleLines')]
    public int $saleLines;

    /**
     * @var int $purchaseLines
     */
    #[JsonProperty('purchaseLines')]
    public int $purchaseLines;

    /**
     * @param array{
     *   code: string,
     *   saleLines: int,
     *   purchaseLines: int,
     *   name?: ?string,
     *   ratePercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'] ?? null;
        $this->ratePercent = $values['ratePercent'] ?? null;
        $this->saleLines = $values['saleLines'];
        $this->purchaseLines = $values['purchaseLines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
