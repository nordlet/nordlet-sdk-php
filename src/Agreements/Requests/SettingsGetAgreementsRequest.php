<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;

class SettingsGetAgreementsRequest extends JsonSerializableType
{
    /**
     * @param array{
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        unset($values);
    }
}
