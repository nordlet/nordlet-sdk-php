<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesRecognitionRunRequest extends JsonSerializableType
{
    /**
     * @var ?string $asOfDate
     */
    #[JsonProperty('asOfDate')]
    public ?string $asOfDate;

    /**
     * @var ?string $postingDate
     */
    #[JsonProperty('postingDate')]
    public ?string $postingDate;

    /**
     * @var ?array<string> $scheduleIds
     */
    #[JsonProperty('scheduleIds'), ArrayType(['string'])]
    public ?array $scheduleIds;

    /**
     * @param array{
     *   asOfDate?: ?string,
     *   postingDate?: ?string,
     *   scheduleIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->asOfDate = $values['asOfDate'] ?? null;
        $this->postingDate = $values['postingDate'] ?? null;
        $this->scheduleIds = $values['scheduleIds'] ?? null;
    }
}
