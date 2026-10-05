<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DeleteAccountResponse extends JsonSerializableType
{
    /**
     * @var bool $deleted
     */
    #[JsonProperty('deleted')]
    public bool $deleted;

    /**
     * @param array{
     *   deleted: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->deleted = $values['deleted'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
