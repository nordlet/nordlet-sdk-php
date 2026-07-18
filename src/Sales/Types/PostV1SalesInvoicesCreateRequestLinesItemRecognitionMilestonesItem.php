<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesInvoicesCreateRequestLinesItemRecognitionMilestonesItem extends JsonSerializableType
{
    /**
     * @var string $description
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var ?string $expectedDate
     */
    #[JsonProperty('expectedDate')]
    public ?string $expectedDate;

    /**
     * @var string $percent
     */
    #[JsonProperty('percent')]
    public string $percent;

    /**
     * @param array{
     *   description: string,
     *   percent: string,
     *   expectedDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'];
        $this->expectedDate = $values['expectedDate'] ?? null;
        $this->percent = $values['percent'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
