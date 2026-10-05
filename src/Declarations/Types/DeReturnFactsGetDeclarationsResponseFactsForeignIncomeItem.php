<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DeReturnFactsGetDeclarationsResponseFactsForeignIncomeItem extends JsonSerializableType
{
    /**
     * @var string $countryCode
     */
    #[JsonProperty('countryCode')]
    public string $countryCode;

    /**
     * @var value-of<DeReturnFactsGetDeclarationsResponseFactsForeignIncomeItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $income
     */
    #[JsonProperty('income')]
    public string $income;

    /**
     * @param array{
     *   countryCode: string,
     *   kind: value-of<DeReturnFactsGetDeclarationsResponseFactsForeignIncomeItemKind>,
     *   income: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->countryCode = $values['countryCode'];
        $this->kind = $values['kind'];
        $this->income = $values['income'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
