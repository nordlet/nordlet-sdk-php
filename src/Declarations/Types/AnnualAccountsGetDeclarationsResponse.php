<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AnnualAccountsGetDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var ?AnnualAccountsGetDeclarationsResponseApproval $approval
     */
    #[JsonProperty('approval')]
    public ?AnnualAccountsGetDeclarationsResponseApproval $approval;

    /**
     * @param array{
     *   approval?: ?AnnualAccountsGetDeclarationsResponseApproval,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->approval = $values['approval'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
