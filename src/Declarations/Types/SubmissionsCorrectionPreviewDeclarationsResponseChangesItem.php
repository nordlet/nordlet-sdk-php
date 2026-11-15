<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SubmissionsCorrectionPreviewDeclarationsResponseChangesItem extends JsonSerializableType
{
    /**
     * @var ?string $field
     */
    #[JsonProperty('field')]
    public ?string $field;

    /**
     * @var ?int $line
     */
    #[JsonProperty('line')]
    public ?int $line;

    /**
     * @var ?string $filed
     */
    #[JsonProperty('filed')]
    public ?string $filed;

    /**
     * @var ?string $current
     */
    #[JsonProperty('current')]
    public ?string $current;

    /**
     * @param array{
     *   field?: ?string,
     *   line?: ?int,
     *   filed?: ?string,
     *   current?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->field = $values['field'] ?? null;
        $this->line = $values['line'] ?? null;
        $this->filed = $values['filed'] ?? null;
        $this->current = $values['current'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
