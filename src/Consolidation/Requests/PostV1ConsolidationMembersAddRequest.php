<?php

namespace Nordlet\Consolidation\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Consolidation\Types\PostV1ConsolidationMembersAddRequestMethod;

class PostV1ConsolidationMembersAddRequest extends JsonSerializableType
{
    /**
     * @var string $groupId
     */
    #[JsonProperty('groupId')]
    public string $groupId;

    /**
     * @var string $memberCompanyId
     */
    #[JsonProperty('memberCompanyId')]
    public string $memberCompanyId;

    /**
     * @var ?float $ownershipPercent
     */
    #[JsonProperty('ownershipPercent')]
    public ?float $ownershipPercent;

    /**
     * @var ?value-of<PostV1ConsolidationMembersAddRequestMethod> $method
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * @param array{
     *   groupId: string,
     *   memberCompanyId: string,
     *   ownershipPercent?: ?float,
     *   method?: ?value-of<PostV1ConsolidationMembersAddRequestMethod>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'];
        $this->memberCompanyId = $values['memberCompanyId'];
        $this->ownershipPercent = $values['ownershipPercent'] ?? null;
        $this->method = $values['method'] ?? null;
    }
}
