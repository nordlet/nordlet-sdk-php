<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class CompaniesSelectAccountResponse extends JsonSerializableType
{
    /**
     * @var string $activeCompanyId
     */
    #[JsonProperty('activeCompanyId')]
    public string $activeCompanyId;

    /**
     * @param array{
     *   activeCompanyId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->activeCompanyId = $values['activeCompanyId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
