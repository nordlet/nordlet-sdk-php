<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class StatementRowsListLedgerRequest extends JsonSerializableType
{
    /**
     * @var string $scheme
     */
    #[JsonProperty('scheme')]
    public string $scheme;

    /**
     * @var ?DateTime $fromDate
     */
    #[JsonProperty('fromDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $fromDate;

    /**
     * @var ?DateTime $toDate
     */
    #[JsonProperty('toDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $toDate;

    /**
     * @param array{
     *   scheme: string,
     *   fromDate?: ?DateTime,
     *   toDate?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scheme = $values['scheme'];
        $this->fromDate = $values['fromDate'] ?? null;
        $this->toDate = $values['toDate'] ?? null;
    }
}
