<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1ReportsJobsCreateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $reportType
     */
    #[JsonProperty('reportType')]
    public string $reportType;

    /**
     * @var mixed $params
     */
    #[JsonProperty('params')]
    public mixed $params;

    /**
     * @var array<string> $formats
     */
    #[JsonProperty('formats'), ArrayType(['string'])]
    public array $formats;

    /**
     * @var value-of<PostV1ReportsJobsCreateResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $error
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var ?array<PostV1ReportsJobsCreateResponseOutputsItem> $outputs
     */
    #[JsonProperty('outputs'), ArrayType([PostV1ReportsJobsCreateResponseOutputsItem::class])]
    public ?array $outputs;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $startedAt
     */
    #[JsonProperty('startedAt')]
    public ?string $startedAt;

    /**
     * @var ?string $finishedAt
     */
    #[JsonProperty('finishedAt')]
    public ?string $finishedAt;

    /**
     * @param array{
     *   id: string,
     *   reportType: string,
     *   params: mixed,
     *   formats: array<string>,
     *   status: value-of<PostV1ReportsJobsCreateResponseStatus>,
     *   createdAt: string,
     *   error?: ?string,
     *   outputs?: ?array<PostV1ReportsJobsCreateResponseOutputsItem>,
     *   startedAt?: ?string,
     *   finishedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->reportType = $values['reportType'];
        $this->params = $values['params'];
        $this->formats = $values['formats'];
        $this->status = $values['status'];
        $this->error = $values['error'] ?? null;
        $this->outputs = $values['outputs'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->startedAt = $values['startedAt'] ?? null;
        $this->finishedAt = $values['finishedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
