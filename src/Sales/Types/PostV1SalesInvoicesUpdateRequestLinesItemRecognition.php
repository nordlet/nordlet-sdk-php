<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesInvoicesUpdateRequestLinesItemRecognition extends JsonSerializableType
{
    /**
     * @var ?value-of<PostV1SalesInvoicesUpdateRequestLinesItemRecognitionMethod> $method
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * @var ?string $startDate
     */
    #[JsonProperty('startDate')]
    public ?string $startDate;

    /**
     * @var ?string $endDate
     */
    #[JsonProperty('endDate')]
    public ?string $endDate;

    /**
     * @var ?array<PostV1SalesInvoicesUpdateRequestLinesItemRecognitionMilestonesItem> $milestones
     */
    #[JsonProperty('milestones'), ArrayType([PostV1SalesInvoicesUpdateRequestLinesItemRecognitionMilestonesItem::class])]
    public ?array $milestones;

    /**
     * @param array{
     *   method?: ?value-of<PostV1SalesInvoicesUpdateRequestLinesItemRecognitionMethod>,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   milestones?: ?array<PostV1SalesInvoicesUpdateRequestLinesItemRecognitionMilestonesItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->method = $values['method'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->milestones = $values['milestones'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
