<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class AccrualsCreateLedgerResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $reversalId
     */
    #[JsonProperty('reversalId')]
    public string $reversalId;

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
     * @param array{
     *   id: string,
     *   reversalId: string,
     *   date: DateTime,
     *   reversalDate: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->reversalId = $values['reversalId'];
        $this->date = $values['date'];
        $this->reversalDate = $values['reversalDate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
