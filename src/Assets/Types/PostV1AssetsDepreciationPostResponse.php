<?php

namespace Nordlet\Assets\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AssetsDepreciationPostResponse extends JsonSerializableType
{
    /**
     * @var int $posted
     */
    #[JsonProperty('posted')]
    public int $posted;

    /**
     * @var int $skipped
     */
    #[JsonProperty('skipped')]
    public int $skipped;

    /**
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @param array{
     *   posted: int,
     *   skipped: int,
     *   total: string,
     *   journalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->posted = $values['posted'];
        $this->skipped = $values['skipped'];
        $this->total = $values['total'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
