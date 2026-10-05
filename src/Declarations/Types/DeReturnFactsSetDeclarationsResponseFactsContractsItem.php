<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class DeReturnFactsSetDeclarationsResponseFactsContractsItem extends JsonSerializableType
{
    /**
     * @var string $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

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
     *   date: DateTime,
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
