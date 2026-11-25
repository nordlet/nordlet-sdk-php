<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class AgreementsPaymentScheduleSetAgreementsRequestRowsItem extends JsonSerializableType
{
    /**
     * @var DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public DateTime $dueDate;

    /**
     * @var string $principal
     */
    #[JsonProperty('principal')]
    public string $principal;

    /**
     * @var string $interest
     */
    #[JsonProperty('interest')]
    public string $interest;

    /**
     * @param array{
     *   dueDate: DateTime,
     *   principal: string,
     *   interest: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dueDate = $values['dueDate'];
        $this->principal = $values['principal'];
        $this->interest = $values['interest'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
