<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class DeferralsPostPurchasesResponse extends JsonSerializableType
{
    /**
     * @var int $posted
     */
    #[JsonProperty('posted')]
    public int $posted;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @var array<string> $journalTransactionIds
     */
    #[JsonProperty('journalTransactionIds'), ArrayType(['string'])]
    public array $journalTransactionIds;

    /**
     * @param array{
     *   posted: int,
     *   total: string,
     *   journalTransactionIds: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->posted = $values['posted'];
        $this->total = $values['total'];
        $this->journalTransactionIds = $values['journalTransactionIds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
