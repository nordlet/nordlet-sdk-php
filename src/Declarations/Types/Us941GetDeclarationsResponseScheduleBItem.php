<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class Us941GetDeclarationsResponseScheduleBItem extends JsonSerializableType
{
    /**
     * @var DateTime $payDate
     */
    #[JsonProperty('payDate'), Date(Date::TYPE_DATE)]
    public DateTime $payDate;

    /**
     * @var string $liability
     */
    #[JsonProperty('liability')]
    public string $liability;

    /**
     * @param array{
     *   payDate: DateTime,
     *   liability: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->payDate = $values['payDate'];
        $this->liability = $values['liability'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
