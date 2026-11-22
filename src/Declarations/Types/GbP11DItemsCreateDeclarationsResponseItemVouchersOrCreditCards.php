<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards extends JsonSerializableType
{
    /**
     * @var string $gross
     */
    #[JsonProperty('gross')]
    public string $gross;

    /**
     * @var string $madeGood
     */
    #[JsonProperty('madeGood')]
    public string $madeGood;

    /**
     * @param array{
     *   gross: string,
     *   madeGood: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->gross = $values['gross'];
        $this->madeGood = $values['madeGood'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
