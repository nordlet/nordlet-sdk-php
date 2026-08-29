<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceEuVatRatesSyncResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $situationOn
     */
    #[JsonProperty('situationOn')]
    public string $situationOn;

    /**
     * @var value-of<PostV1ReferenceEuVatRatesSyncResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var int $ratesFetched
     */
    #[JsonProperty('ratesFetched')]
    public int $ratesFetched;

    /**
     * @var int $ratesInserted
     */
    #[JsonProperty('ratesInserted')]
    public int $ratesInserted;

    /**
     * @var int $ratesClosed
     */
    #[JsonProperty('ratesClosed')]
    public int $ratesClosed;

    /**
     * @param array{
     *   id: string,
     *   situationOn: string,
     *   status: value-of<PostV1ReferenceEuVatRatesSyncResponseStatus>,
     *   ratesFetched: int,
     *   ratesInserted: int,
     *   ratesClosed: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->situationOn = $values['situationOn'];
        $this->status = $values['status'];
        $this->ratesFetched = $values['ratesFetched'];
        $this->ratesInserted = $values['ratesInserted'];
        $this->ratesClosed = $values['ratesClosed'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
