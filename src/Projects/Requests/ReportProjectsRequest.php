<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ReportProjectsRequest extends JsonSerializableType
{
    /**
     * @var ?string $projectId
     */
    #[JsonProperty('projectId')]
    public ?string $projectId;

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
     * @param array{
     *   projectId?: ?string,
     *   dateFrom?: ?DateTime,
     *   dateTo?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->projectId = $values['projectId'] ?? null;
        $this->dateFrom = $values['dateFrom'] ?? null;
        $this->dateTo = $values['dateTo'] ?? null;
    }
}
