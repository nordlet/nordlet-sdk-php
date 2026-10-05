<?php

namespace Nordlet\Inventory\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class LotsUpdateInventoryRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?DateTime $expiryDate
     */
    #[JsonProperty('expiryDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $expiryDate;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   id: string,
     *   expiryDate?: ?DateTime,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->expiryDate = $values['expiryDate'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
