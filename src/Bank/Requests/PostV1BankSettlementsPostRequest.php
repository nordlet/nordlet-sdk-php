<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankSettlementsPostRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?string $commissionPercent
     */
    #[JsonProperty('commissionPercent')]
    public ?string $commissionPercent;

    /**
     * @param array{
     *   id: string,
     *   date?: ?string,
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
