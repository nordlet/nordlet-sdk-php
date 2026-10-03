<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Declarations\Types\PostV1DeclarationsPlIntrastatGenerateRequestFlow;

class PostV1DeclarationsPlIntrastatGenerateRequest extends JsonSerializableType
{
    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var value-of<PostV1DeclarationsPlIntrastatGenerateRequestFlow> $flow
     */
    #[JsonProperty('flow')]
    public string $flow;

    /**
     * @var ?string $transactionNature
     */
    #[JsonProperty('transactionNature')]
    public ?string $transactionNature;

    /**
     * @param array{
     *   year: int,
     *   month: int,
     *   flow: value-of<PostV1DeclarationsPlIntrastatGenerateRequestFlow>,
     *   transactionNature?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->flow = $values['flow'];
        $this->transactionNature = $values['transactionNature'] ?? null;
    }
}
