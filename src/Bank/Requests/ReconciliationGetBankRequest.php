<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ReconciliationGetBankRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var ?string $statementBalance
     */
    #[JsonProperty('statementBalance')]
    public ?string $statementBalance;

    /**
     * @param array{
     *   bankAccountId: string,
     *   date: DateTime,
     *   statementBalance?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->date = $values['date'];
        $this->statementBalance = $values['statementBalance'] ?? null;
    }
}
