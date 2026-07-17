<?php

namespace Nordlet\Reports\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Reports\Types\PostV1ReportsJobsCreateRequestFormatsItem;

class PostV1ReportsJobsCreateRequest extends JsonSerializableType
{
    /**
     * @var string $reportType
     */
    #[JsonProperty('reportType')]
    public string $reportType;

    /**
     * @var ?array<string, mixed> $params
     */
    #[JsonProperty('params'), ArrayType(['string' => 'mixed'])]
    public ?array $params;

    /**
     * @var ?array<value-of<PostV1ReportsJobsCreateRequestFormatsItem>> $formats
     */
    #[JsonProperty('formats'), ArrayType(['string'])]
    public ?array $formats;

    /**
     * @param array{
     *   reportType: string,
     *   params?: ?array<string, mixed>,
     *   formats?: ?array<value-of<PostV1ReportsJobsCreateRequestFormatsItem>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->reportType = $values['reportType'];
        $this->params = $values['params'] ?? null;
        $this->formats = $values['formats'] ?? null;
    }
}
