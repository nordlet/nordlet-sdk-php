<?php

namespace Nordlet\Assets\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AssetsAssetsModernizeRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $date
     */
    #[JsonProperty('date')]
    public string $date;

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
     *   date: string,
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
