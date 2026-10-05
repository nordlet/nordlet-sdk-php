<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\RecognitionModifySalesRequestApproach;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Sales\Types\RecognitionModifySalesRequestNewMilestonesItem;
use Nordlet\Core\Types\ArrayType;

class RecognitionModifySalesRequest extends JsonSerializableType
{
    /**
     * @var string $invoiceLineId
     */
    #[JsonProperty('invoiceLineId')]
    public string $invoiceLineId;

    /**
     * @var value-of<RecognitionModifySalesRequestApproach> $approach
     */
    #[JsonProperty('approach')]
    public string $approach;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var ?DateTime $newEndDate
     */
    #[JsonProperty('newEndDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $newEndDate;

    /**
     * @var ?array<RecognitionModifySalesRequestNewMilestonesItem> $newMilestones
     */
    #[JsonProperty('newMilestones'), ArrayType([RecognitionModifySalesRequestNewMilestonesItem::class])]
    public ?array $newMilestones;

    /**
     * @param array{
     *   invoiceLineId: string,
     *   approach: value-of<RecognitionModifySalesRequestApproach>,
     *   date?: ?DateTime,
     *   newEndDate?: ?DateTime,
     *   newMilestones?: ?array<RecognitionModifySalesRequestNewMilestonesItem>,
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
