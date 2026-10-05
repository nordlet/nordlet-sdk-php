<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Projects\Types\TimeEntriesBillProjectsRequestGroupBy;

class TimeEntriesBillProjectsRequest extends JsonSerializableType
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
     * @var ?DateTime $dateFrom
     */
    #[JsonProperty('dateFrom'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateFrom;

    /**
     * @var ?DateTime $dateTo
     */
    #[JsonProperty('dateTo'), Date(Date::TYPE_DATE)]
    public ?DateTime $dateTo;

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
     * @var ?DateTime $issueDate
     */
    #[JsonProperty('issueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $issueDate;

    /**
     * @var ?DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $dueDate;

    /**
     * @var ?value-of<TimeEntriesBillProjectsRequestGroupBy> $groupBy
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
     *   dateFrom?: ?DateTime,
     *   dateTo?: ?DateTime,
     *   itemId?: ?string,
     *   hourlyRate?: ?string,
     *   vatRatePercent?: ?string,
     *   vatClassifierCode?: ?string,
     *   issueDate?: ?DateTime,
     *   dueDate?: ?DateTime,
     *   groupBy?: ?value-of<TimeEntriesBillProjectsRequestGroupBy>,
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
