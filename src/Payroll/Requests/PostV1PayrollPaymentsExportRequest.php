<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PayrollPaymentsExportRequest extends JsonSerializableType
{
    /**
     * @var string $runId
     */
    #[JsonProperty('runId')]
    public string $runId;

    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var ?string $executionDate
     */
    #[JsonProperty('executionDate')]
    public ?string $executionDate;

    /**
     * @param array{
     *   runId: string,
     *   bankAccountId: string,
     *   executionDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->runId = $values['runId'];
        $this->bankAccountId = $values['bankAccountId'];
        $this->executionDate = $values['executionDate'] ?? null;
    }
}
