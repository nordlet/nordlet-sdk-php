<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ExportAccountResponseMembershipsItem extends JsonSerializableType
{
    /**
     * @var string $companyId
     */
    #[JsonProperty('companyId')]
    public string $companyId;

    /**
     * @var string $companyName
     */
    #[JsonProperty('companyName')]
    public string $companyName;

    /**
     * @var string $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var string $since
     */
    #[JsonProperty('since')]
    public string $since;

    /**
     * @param array{
     *   companyId: string,
     *   companyName: string,
     *   role: string,
     *   since: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyId = $values['companyId'];
        $this->companyName = $values['companyName'];
        $this->role = $values['role'];
        $this->since = $values['since'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
