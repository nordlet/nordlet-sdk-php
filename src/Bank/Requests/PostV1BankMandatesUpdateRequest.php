<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1BankMandatesUpdateRequest extends JsonSerializableType
{
    /**
     * @var ?string $bic
     */
    #[JsonProperty('bic')]
    public ?string $bic;

    /**
     * @var ?string $debtorName
     */
    #[JsonProperty('debtorName')]
    public ?string $debtorName;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @param array{
     *   id: string,
     *   bic?: ?string,
     *   debtorName?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bic = $values['bic'] ?? null;
        $this->debtorName = $values['debtorName'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->id = $values['id'];
    }
}
