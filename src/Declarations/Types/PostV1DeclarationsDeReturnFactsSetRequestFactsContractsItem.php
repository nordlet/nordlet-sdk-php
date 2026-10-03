<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnFactsSetRequestFactsContractsItem extends JsonSerializableType
{
    /**
     * @var string $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $partner
     */
    #[JsonProperty('partner')]
    public string $partner;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   kind: string,
     *   date: string,
     *   partner: string,
     *   amount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->date = $values['date'];
        $this->partner = $values['partner'];
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
