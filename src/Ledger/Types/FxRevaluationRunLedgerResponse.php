<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class FxRevaluationRunLedgerResponse extends JsonSerializableType
{
    /**
     * @var ?string $runId
     */
    #[JsonProperty('runId')]
    public ?string $runId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var DateTime $reversalDate
     */
    #[JsonProperty('reversalDate'), Date(Date::TYPE_DATE)]
    public DateTime $reversalDate;

    /**
     * @var ?string $journalTransactionId
     */
    #[JsonProperty('journalTransactionId')]
    public ?string $journalTransactionId;

    /**
     * @var ?string $reversalJournalTransactionId
     */
    #[JsonProperty('reversalJournalTransactionId')]
    public ?string $reversalJournalTransactionId;

    /**
     * @var string $gain
     */
    #[JsonProperty('gain')]
    public string $gain;

    /**
     * @var string $loss
     */
    #[JsonProperty('loss')]
    public string $loss;

    /**
     * @var array<FxRevaluationRunLedgerResponseLinesItem> $lines
     */
    #[JsonProperty('lines'), ArrayType([FxRevaluationRunLedgerResponseLinesItem::class])]
    public array $lines;

    /**
     * @param array{
     *   date: DateTime,
     *   reversalDate: DateTime,
     *   gain: string,
     *   loss: string,
     *   lines: array<FxRevaluationRunLedgerResponseLinesItem>,
     *   runId?: ?string,
     *   journalTransactionId?: ?string,
     *   reversalJournalTransactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->runId = $values['runId'] ?? null;
        $this->date = $values['date'];
        $this->reversalDate = $values['reversalDate'];
        $this->journalTransactionId = $values['journalTransactionId'] ?? null;
        $this->reversalJournalTransactionId = $values['reversalJournalTransactionId'] ?? null;
        $this->gain = $values['gain'];
        $this->loss = $values['loss'];
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
