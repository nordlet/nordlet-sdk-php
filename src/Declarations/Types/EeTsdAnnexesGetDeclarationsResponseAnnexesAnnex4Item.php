<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class EeTsdAnnexesGetDeclarationsResponseAnnexesAnnex4Item extends JsonSerializableType
{
    /**
     * @var string $element The element of tsd_schema, named by its code
     */
    #[JsonProperty('element')]
    public string $element;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   element: string,
     *   amount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->element = $values['element'];
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
