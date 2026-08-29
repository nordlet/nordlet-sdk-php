<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankFeedsSyncResponseAccountsItem extends JsonSerializableType
{
    /**
     * @var string $feedAccountId
     */
    #[JsonProperty('feedAccountId')]
    public string $feedAccountId;

    /**
     * @var int $imported
     */
    #[JsonProperty('imported')]
    public int $imported;

    /**
     * @var int $fetched
     */
    #[JsonProperty('fetched')]
    public int $fetched;

    /**
     * @param array{
     *   feedAccountId: string,
     *   imported: int,
     *   fetched: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->feedAccountId = $values['feedAccountId'];
        $this->imported = $values['imported'];
        $this->fetched = $values['fetched'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
