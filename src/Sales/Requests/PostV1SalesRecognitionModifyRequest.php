<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\PostV1SalesRecognitionModifyRequestApproach;
use Nordlet\Sales\Types\PostV1SalesRecognitionModifyRequestNewMilestonesItem;
use Nordlet\Core\Types\ArrayType;

class PostV1SalesRecognitionModifyRequest extends JsonSerializableType
{
    /**
     * @var string $invoiceLineId
     */
    #[JsonProperty('invoiceLineId')]
    public string $invoiceLineId;

    /**
     * @var value-of<PostV1SalesRecognitionModifyRequestApproach> $approach
     */
    #[JsonProperty('approach')]
    public string $approach;

    /**
     * @var ?string $date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?string $newEndDate
     */
    #[JsonProperty('newEndDate')]
    public ?string $newEndDate;

    /**
     * @var ?array<PostV1SalesRecognitionModifyRequestNewMilestonesItem> $newMilestones
     */
    #[JsonProperty('newMilestones'), ArrayType([PostV1SalesRecognitionModifyRequestNewMilestonesItem::class])]
    public ?array $newMilestones;

    /**
     * @param array{
     *   invoiceLineId: string,
     *   approach: value-of<PostV1SalesRecognitionModifyRequestApproach>,
     *   date?: ?string,
     *   newEndDate?: ?string,
     *   newMilestones?: ?array<PostV1SalesRecognitionModifyRequestNewMilestonesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceLineId = $values['invoiceLineId'];
        $this->approach = $values['approach'];
        $this->date = $values['date'] ?? null;
        $this->newEndDate = $values['newEndDate'] ?? null;
        $this->newMilestones = $values['newMilestones'] ?? null;
    }
}
