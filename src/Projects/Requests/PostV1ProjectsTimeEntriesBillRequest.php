<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Projects\Types\PostV1ProjectsTimeEntriesBillRequestGroupBy;

class PostV1ProjectsTimeEntriesBillRequest extends JsonSerializableType
{
    /**
     * @var string $projectId
     */
    #[JsonProperty('projectId')]
    public string $projectId;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $dateFrom
     */
    #[JsonProperty('dateFrom')]
    public ?string $dateFrom;

    /**
     * @var ?string $dateTo
     */
    #[JsonProperty('dateTo')]
    public ?string $dateTo;

    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var ?string $hourlyRate
     */
    #[JsonProperty('hourlyRate')]
    public ?string $hourlyRate;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @var ?string $vatClassifierCode
     */
    #[JsonProperty('vatClassifierCode')]
    public ?string $vatClassifierCode;

    /**
     * @var ?string $issueDate
     */
    #[JsonProperty('issueDate')]
    public ?string $issueDate;

    /**
     * @var ?string $dueDate
     */
    #[JsonProperty('dueDate')]
    public ?string $dueDate;

    /**
     * @var ?value-of<PostV1ProjectsTimeEntriesBillRequestGroupBy> $groupBy
     */
    #[JsonProperty('groupBy')]
    public ?string $groupBy;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   projectId: string,
     *   partnerId?: ?string,
     *   dateFrom?: ?string,
     *   dateTo?: ?string,
     *   itemId?: ?string,
     *   hourlyRate?: ?string,
     *   vatRatePercent?: ?string,
     *   vatClassifierCode?: ?string,
     *   issueDate?: ?string,
     *   dueDate?: ?string,
     *   groupBy?: ?value-of<PostV1ProjectsTimeEntriesBillRequestGroupBy>,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->projectId = $values['projectId'];
        $this->partnerId = $values['partnerId'] ?? null;
        $this->dateFrom = $values['dateFrom'] ?? null;
        $this->dateTo = $values['dateTo'] ?? null;
        $this->itemId = $values['itemId'] ?? null;
        $this->hourlyRate = $values['hourlyRate'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
        $this->vatClassifierCode = $values['vatClassifierCode'] ?? null;
        $this->issueDate = $values['issueDate'] ?? null;
        $this->dueDate = $values['dueDate'] ?? null;
        $this->groupBy = $values['groupBy'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
