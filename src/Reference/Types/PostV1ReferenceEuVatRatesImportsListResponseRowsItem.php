<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceEuVatRatesImportsListResponseRowsItem extends JsonSerializableType
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
     * @var value-of<PostV1ReferenceEuVatRatesImportsListResponseRowsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var value-of<PostV1ReferenceEuVatRatesImportsListResponseRowsItemTrigger> $trigger
     */
    #[JsonProperty('trigger')]
    public string $trigger;

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
     * @var ?string $error
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var string $startedAt
     */
    #[JsonProperty('startedAt')]
    public string $startedAt;

    /**
     * @var ?string $finishedAt
     */
    #[JsonProperty('finishedAt')]
    public ?string $finishedAt;

    /**
     * @param array{
     *   id: string,
     *   situationOn: string,
     *   status: value-of<PostV1ReferenceEuVatRatesImportsListResponseRowsItemStatus>,
     *   trigger: value-of<PostV1ReferenceEuVatRatesImportsListResponseRowsItemTrigger>,
     *   ratesFetched: int,
     *   ratesInserted: int,
     *   ratesClosed: int,
     *   startedAt: string,
     *   error?: ?string,
     *   finishedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->situationOn = $values['situationOn'];
        $this->status = $values['status'];
        $this->trigger = $values['trigger'];
        $this->ratesFetched = $values['ratesFetched'];
        $this->ratesInserted = $values['ratesInserted'];
        $this->ratesClosed = $values['ratesClosed'];
        $this->error = $values['error'] ?? null;
        $this->startedAt = $values['startedAt'];
        $this->finishedAt = $values['finishedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
