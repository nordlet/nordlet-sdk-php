<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EuOwnGoodsTransfersComputeDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $destinationCountryCode
     */
    #[JsonProperty('destinationCountryCode')]
    public string $destinationCountryCode;

    /**
     * @var string $dispatchCountryCode
     */
    #[JsonProperty('dispatchCountryCode')]
    public string $dispatchCountryCode;

    /**
     * @var string $taxableAmount
     */
    #[JsonProperty('taxableAmount')]
    public string $taxableAmount;

    /**
     * @var int $transfers
     */
    #[JsonProperty('transfers')]
    public int $transfers;

    /**
     * @param array{
     *   destinationCountryCode: string,
     *   dispatchCountryCode: string,
     *   taxableAmount: string,
     *   transfers: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->destinationCountryCode = $values['destinationCountryCode'];
        $this->dispatchCountryCode = $values['dispatchCountryCode'];
        $this->taxableAmount = $values['taxableAmount'];
        $this->transfers = $values['transfers'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
