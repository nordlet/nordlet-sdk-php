<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class VatProrataAdjustmentPostDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public DateTime $date;

    /**
     * @var int $fiscalYear
     */
    #[JsonProperty('fiscalYear')]
    public int $fiscalYear;

    /**
     * @var string $definitivePercent
     */
    #[JsonProperty('definitivePercent')]
    public string $definitivePercent;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @param array{
     *   id: string,
     *   date: DateTime,
     *   fiscalYear: int,
     *   definitivePercent: string,
     *   amount: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->date = $values['date'];
        $this->fiscalYear = $values['fiscalYear'];
        $this->definitivePercent = $values['definitivePercent'];
        $this->amount = $values['amount'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
