<?php

namespace Nordlet\Consolidation\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationIntercompanyLinksSetRequest extends JsonSerializableType
{
    /**
     * @var string $groupId
     */
    #[JsonProperty('groupId')]
    public string $groupId;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $counterpartyCompanyId
     */
    #[JsonProperty('counterpartyCompanyId')]
    public string $counterpartyCompanyId;

    /**
     * @param array{
     *   groupId: string,
     *   partnerId: string,
     *   counterpartyCompanyId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'];
        $this->partnerId = $values['partnerId'];
        $this->counterpartyCompanyId = $values['counterpartyCompanyId'];
    }
}
