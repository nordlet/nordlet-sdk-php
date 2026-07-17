<?php

namespace Nordlet\Consolidation\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Consolidation\Types\PostV1ConsolidationReportRequestCategory;
use Nordlet\Consolidation\Types\PostV1ConsolidationReportRequestEliminationsItem;
use Nordlet\Core\Types\ArrayType;

class PostV1ConsolidationReportRequest extends JsonSerializableType
{
    /**
     * @var string $groupId
     */
    #[JsonProperty('groupId')]
    public string $groupId;

    /**
     * @var string $fromDate
     */
    #[JsonProperty('fromDate')]
    public string $fromDate;

    /**
     * @var string $toDate
     */
    #[JsonProperty('toDate')]
    public string $toDate;

    /**
     * @var ?value-of<PostV1ConsolidationReportRequestCategory> $category
     */
    #[JsonProperty('category')]
    public ?string $category;

    /**
     * @var ?array<PostV1ConsolidationReportRequestEliminationsItem> $eliminations
     */
    #[JsonProperty('eliminations'), ArrayType([PostV1ConsolidationReportRequestEliminationsItem::class])]
    public ?array $eliminations;

    /**
     * @param array{
     *   groupId: string,
     *   fromDate: string,
     *   toDate: string,
     *   category?: ?value-of<PostV1ConsolidationReportRequestCategory>,
     *   eliminations?: ?array<PostV1ConsolidationReportRequestEliminationsItem>,
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
