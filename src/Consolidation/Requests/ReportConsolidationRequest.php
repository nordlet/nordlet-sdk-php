<?php

namespace Nordlet\Consolidation\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Consolidation\Types\ReportConsolidationRequestCategory;
use Nordlet\Consolidation\Types\ReportConsolidationRequestEliminationsItem;
use Nordlet\Core\Types\ArrayType;

class ReportConsolidationRequest extends JsonSerializableType
{
    /**
     * @var string $groupId
     */
    #[JsonProperty('groupId')]
    public string $groupId;

    /**
     * @var DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public DateTime $fromDate;

    /**
     * @var DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public DateTime $toDate;

    /**
     * @var ?value-of<ReportConsolidationRequestCategory> $category
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @var ?array<ReportConsolidationRequestEliminationsItem> $eliminations
     */
    #[JsonProperty('eliminations'), ArrayType([ReportConsolidationRequestEliminationsItem::class])]
    public ?array $eliminations;

    /**
     * @param array{
     *   groupId: string,
     *   fromDate: DateTime,
     *   toDate: DateTime,
     *   category?: ?value-of<ReportConsolidationRequestCategory>,
     *   eliminations?: ?array<ReportConsolidationRequestEliminationsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'];
        $this->fromDate = $values['fromDate'];
        $this->toDate = $values['toDate'];
        $this->category = $values['category'] ?? null;
        $this->eliminations = $values['eliminations'] ?? null;
    }
}
