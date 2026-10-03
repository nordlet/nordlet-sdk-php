<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsAnnualAccountsGetResponse extends JsonSerializableType
{
    /**
     * @var ?PostV1DeclarationsAnnualAccountsGetResponseApproval $approval
     */
    #[JsonProperty('approval')]
    public ?PostV1DeclarationsAnnualAccountsGetResponseApproval $approval;

    /**
     * @param array{
     *   approval?: ?PostV1DeclarationsAnnualAccountsGetResponseApproval,
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
