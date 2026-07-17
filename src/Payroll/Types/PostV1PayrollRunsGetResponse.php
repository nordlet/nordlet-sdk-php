<?php

namespace Nordlet\Payroll\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1PayrollRunsGetResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var int $year
     */
    #[JsonProperty('year')]
    public int $year;

    /**
     * @var int $month
     */
    #[JsonProperty('month')]
    public int $month;

    /**
     * @var value-of<PostV1PayrollRunsGetResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $grossTotal
     */
    #[JsonProperty('grossTotal')]
    public string $grossTotal;

    /**
     * @var string $npdTotal
     */
    #[JsonProperty('npdTotal')]
    public string $npdTotal;

    /**
     * @var string $gpmTotal
     */
    #[JsonProperty('gpmTotal')]
    public string $gpmTotal;

    /**
     * @var string $sodraEmployeeTotal
     */
    #[JsonProperty('sodraEmployeeTotal')]
    public string $sodraEmployeeTotal;

    /**
     * @var string $sodraEmployerTotal
     */
    #[JsonProperty('sodraEmployerTotal')]
    public string $sodraEmployerTotal;

    /**
     * @var string $netTotal
     */
    #[JsonProperty('netTotal')]
    public string $netTotal;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $approvedAt
     */
    #[JsonProperty('approvedAt')]
    public ?string $approvedAt;

    /**
     * @var array<PostV1PayrollRunsGetResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([PostV1PayrollRunsGetResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   id: string,
     *   year: int,
     *   month: int,
     *   status: value-of<PostV1PayrollRunsGetResponseStatus>,
     *   grossTotal: string,
     *   npdTotal: string,
     *   gpmTotal: string,
     *   sodraEmployeeTotal: string,
     *   sodraEmployerTotal: string,
     *   netTotal: string,
     *   createdAt: string,
     *   lines: array<PostV1PayrollRunsGetResponseLinesItem>,
     *   journalTransactionId?: ?string,
     *   notes?: ?string,
     *   approvedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->status = $values['status'];
        $this->grossTotal = $values['grossTotal'];
        $this->npdTotal = $values['npdTotal'];
        $this->gpmTotal = $values['gpmTotal'];
        $this->sodraEmployeeTotal = $values['sodraEmployeeTotal'];
        $this->sodraEmployerTotal = $values['sodraEmployerTotal'];
        $this->netTotal = $values['netTotal'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->approvedAt = $values['approvedAt'] ?? null;
        $this->lines = $values['lines'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
