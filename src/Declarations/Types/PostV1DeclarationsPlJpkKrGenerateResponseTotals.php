<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlJpkKrGenerateResponseTotals extends JsonSerializableType
{
    /**
     * @var string $operations
     */
    #[JsonProperty('operations')]
    public string $operations;

    /**
     * @var string $debit
     */
    #[JsonProperty('debit')]
    public string $debit;

    /**
     * @var string $credit
     */
    #[JsonProperty('credit')]
    public string $credit;

    /**
     * @param array{
     *   operations: string,
     *   debit: string,
     *   credit: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->operations = $values['operations'];
        $this->debit = $values['debit'];
        $this->credit = $values['credit'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
