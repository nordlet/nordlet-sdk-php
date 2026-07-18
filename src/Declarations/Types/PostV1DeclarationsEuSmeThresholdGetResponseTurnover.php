<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsEuSmeThresholdGetResponseTurnover extends JsonSerializableType
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
     * @var int $documents
     */
    #[JsonProperty('documents')]
    public int $documents;

    /**
     * @param array{
     *   amount: string,
     *   currency: string,
     *   documents: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->amount = $values['amount'];
        $this->currency = $values['currency'];
        $this->documents = $values['documents'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
