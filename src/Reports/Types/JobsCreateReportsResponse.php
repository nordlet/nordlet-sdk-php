<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use DateTime;
use Nordlet\Core\Types\Date;

class JobsCreateReportsResponse extends JsonSerializableType
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
     * @var value-of<JobsCreateReportsResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $error
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var ?array<JobsCreateReportsResponseOutputsItem> $outputs
     */
    #[JsonProperty('outputs'), ArrayType([JobsCreateReportsResponseOutputsItem::class])]
    public ?array $outputs;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var ?DateTime $startedAt
     */
    #[JsonProperty('startedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $startedAt;

    /**
     * @var ?DateTime $finishedAt
     */
    #[JsonProperty('finishedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $finishedAt;

    /**
     * @param array{
     *   id: string,
     *   reportType: string,
     *   params: mixed,
     *   formats: array<string>,
     *   status: value-of<JobsCreateReportsResponseStatus>,
     *   createdAt: DateTime,
     *   error?: ?string,
     *   outputs?: ?array<JobsCreateReportsResponseOutputsItem>,
     *   startedAt?: ?DateTime,
     *   finishedAt?: ?DateTime,
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
