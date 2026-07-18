<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesRecognitionComputeRequest extends JsonSerializableType
{
    /**
     * @var ?string $asOfDate
     */
    #[JsonProperty('asOfDate')]
    public ?string $asOfDate;

    /**
     * @param array{
     *   asOfDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->asOfDate = $values['asOfDate'] ?? null;
    }
}
