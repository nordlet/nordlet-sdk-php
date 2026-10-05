<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesCreateSalesRequestLinesItemRecognition extends JsonSerializableType
{
    /**
     * @var ?value-of<InvoicesCreateSalesRequestLinesItemRecognitionMethod> $method
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * @var ?DateTime $startDate
     */
    #[JsonProperty('startDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $startDate;

    /**
     * @var ?DateTime $endDate
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $endDate;

    /**
     * @var ?array<InvoicesCreateSalesRequestLinesItemRecognitionMilestonesItem> $milestones
     */
    #[JsonProperty('milestones'), ArrayType([InvoicesCreateSalesRequestLinesItemRecognitionMilestonesItem::class])]
    public ?array $milestones;

    /**
     * @param array{
     *   method?: ?value-of<InvoicesCreateSalesRequestLinesItemRecognitionMethod>,
     *   startDate?: ?DateTime,
     *   endDate?: ?DateTime,
     *   milestones?: ?array<InvoicesCreateSalesRequestLinesItemRecognitionMilestonesItem>,
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
