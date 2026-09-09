<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountTableSettingsGetRequest extends JsonSerializableType
{
    /**
     * @var string $tableKey
     */
    #[JsonProperty('tableKey')]
    public string $tableKey;

    /**
     * @param array{
     *   tableKey: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tableKey = $values['tableKey'];
    }
}
