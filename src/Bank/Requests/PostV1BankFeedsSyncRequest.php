<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankFeedsSyncRequest extends JsonSerializableType
{
    /**
     * @var string $connectionId
     */
    #[JsonProperty('connectionId')]
    public string $connectionId;

    /**
     * @var ?string $feedAccountId
     */
    #[JsonProperty('feedAccountId')]
    public ?string $feedAccountId;

    /**
     * @var ?string $dateFrom
     */
    #[JsonProperty('dateFrom')]
    public ?string $dateFrom;

    /**
     * @var ?string $dateTo
     */
    #[JsonProperty('dateTo')]
    public ?string $dateTo;

    /**
     * @param array{
     *   connectionId: string,
     *   feedAccountId?: ?string,
     *   dateFrom?: ?string,
     *   dateTo?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->connectionId = $values['connectionId'];
        $this->feedAccountId = $values['feedAccountId'] ?? null;
        $this->dateFrom = $values['dateFrom'] ?? null;
        $this->dateTo = $values['dateTo'] ?? null;
    }
}
