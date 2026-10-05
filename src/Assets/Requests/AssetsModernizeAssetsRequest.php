<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class AssetsModernizeAssetsRequest extends JsonSerializableType
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
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?int $addedLifeMonths
     */
    #[JsonProperty('addedLifeMonths')]
    public ?int $addedLifeMonths;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   id: string,
     *   date: DateTime,
     *   amount: string,
     *   addedLifeMonths?: ?int,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->date = $values['date'];
        $this->amount = $values['amount'];
        $this->addedLifeMonths = $values['addedLifeMonths'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
