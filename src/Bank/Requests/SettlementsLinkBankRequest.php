<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SettlementsLinkBankRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $bankTransactionId
     */
    #[JsonProperty('bankTransactionId')]
    public string $bankTransactionId;

    /**
     * @param array{
     *   id: string,
     *   bankTransactionId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->bankTransactionId = $values['bankTransactionId'];
    }
}
