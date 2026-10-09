<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class SettingsUpdateAgreementsRequest extends JsonSerializableType
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
}
