<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class SettlementsPostBankRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var ?string $commissionPercent
     */
    #[JsonProperty('commissionPercent')]
    public ?string $commissionPercent;

    /**
     * @param array{
     *   id: string,
     *   date?: ?DateTime,
     *   commissionPercent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->date = $values['date'] ?? null;
        $this->commissionPercent = $values['commissionPercent'] ?? null;
    }
}
