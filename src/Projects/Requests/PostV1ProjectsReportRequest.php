<?php

namespace Nordlet\Projects\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProjectsReportRequest extends JsonSerializableType
{
    /**
     * @var ?string $projectId
     */
    #[JsonProperty('projectId')]
    public ?string $projectId;

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
     * @param array{
     *   projectId?: ?string,
     *   dateFrom?: ?string,
     *   dateTo?: ?string,
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
