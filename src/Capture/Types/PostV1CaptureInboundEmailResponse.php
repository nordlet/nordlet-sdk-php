<?php

namespace Nordlet\Capture\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1CaptureInboundEmailResponse extends JsonSerializableType
{
    /**
     * @var int $accepted
     */
    #[JsonProperty('accepted')]
    public int $accepted;

    /**
     * @var int $skipped
     */
    #[JsonProperty('skipped')]
    public int $skipped;

    /**
     * @var array<string> $captureIds
     */
    #[JsonProperty('captureIds'), ArrayType(['string'])]
    public array $captureIds;

    /**
     * @param array{
     *   accepted: int,
     *   skipped: int,
     *   captureIds: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accepted = $values['accepted'];
        $this->skipped = $values['skipped'];
        $this->captureIds = $values['captureIds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
