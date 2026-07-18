<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsEuSmeThresholdsListResponseThresholdsItemIntraEuAcquisitionsTrigger extends JsonSerializableType
{
    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var string $currency
     */
    #[JsonProperty('currency')]
    public string $currency;

    /**
     * @var string $note
     */
    #[JsonProperty('note')]
    public string $note;

    /**
     * @param array{
     *   amount: string,
     *   currency: string,
     *   note: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amount = $values['amount'];
        $this->currency = $values['currency'];
        $this->note = $values['note'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
