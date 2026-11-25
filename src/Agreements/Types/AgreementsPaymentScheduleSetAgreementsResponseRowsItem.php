<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class AgreementsPaymentScheduleSetAgreementsResponseRowsItem extends JsonSerializableType
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
     * @var string $total
     */
    #[JsonProperty('total')]
    public string $total;

    /**
     * @var ?string $principalOutstanding
     */
    #[JsonProperty('principalOutstanding')]
    public ?string $principalOutstanding;

    /**
     * @param array{
     *   dueDate: DateTime,
     *   principal: string,
     *   interest: string,
     *   total: string,
     *   principalOutstanding?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dueDate = $values['dueDate'];
        $this->principal = $values['principal'];
        $this->interest = $values['interest'];
        $this->total = $values['total'];
        $this->principalOutstanding = $values['principalOutstanding'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
