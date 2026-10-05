<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class PlJpkFaGenerateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var DateTime $dateFrom
     */
    #[JsonProperty('dateFrom'), Date(Date::TYPE_DATE)]
    public DateTime $dateFrom;

    /**
     * @var DateTime $dateTo
     */
    #[JsonProperty('dateTo'), Date(Date::TYPE_DATE)]
    public DateTime $dateTo;

    /**
     * @param array{
     *   dateFrom: DateTime,
     *   dateTo: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dateFrom = $values['dateFrom'];
        $this->dateTo = $values['dateTo'];
    }
}
