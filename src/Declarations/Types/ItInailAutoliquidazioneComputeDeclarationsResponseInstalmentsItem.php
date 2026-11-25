<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ItInailAutoliquidazioneComputeDeclarationsResponseInstalmentsItem extends JsonSerializableType
{
    /**
     * @var int $number
     */
    #[JsonProperty('number')]
    public int $number;

    /**
     * @var DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public DateTime $dueDate;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $interest
     */
    #[JsonProperty('interest')]
    public ?string $interest;

    /**
     * @param array{
     *   number: int,
     *   dueDate: DateTime,
     *   amount: string,
     *   interest?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->number = $values['number'];
        $this->dueDate = $values['dueDate'];
        $this->amount = $values['amount'];
        $this->interest = $values['interest'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
