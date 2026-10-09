<?php

namespace Nordlet\Pos\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class ShiftsClosePosRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $countedCash
     */
    #[JsonProperty('countedCash')]
    public string $countedCash;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var ?string $reportNumber
     */
    #[JsonProperty('reportNumber')]
    public ?string $reportNumber;

    /**
     * @param array{
     *   id: string,
     *   countedCash: string,
     *   date?: ?DateTime,
     *   reportNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->countedCash = $values['countedCash'];
        $this->date = $values['date'] ?? null;
        $this->reportNumber = $values['reportNumber'] ?? null;
    }
}
