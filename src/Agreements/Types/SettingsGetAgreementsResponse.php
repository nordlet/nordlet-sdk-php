<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SettingsGetAgreementsResponse extends JsonSerializableType
{
    /**
     * @var bool $autoBilling
     */
    #[JsonProperty('autoBilling')]
    public bool $autoBilling;

    /**
     * @param array{
     *   autoBilling: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->autoBilling = $values['autoBilling'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
