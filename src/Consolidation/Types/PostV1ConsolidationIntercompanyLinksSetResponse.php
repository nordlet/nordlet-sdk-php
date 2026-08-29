<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationIntercompanyLinksSetResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $groupId
     */
    #[JsonProperty('groupId')]
    public string $groupId;

    /**
     * @var string $companyId
     */
    #[JsonProperty('companyId')]
    public string $companyId;

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
     *   id: string,
     *   groupId: string,
     *   companyId: string,
     *   partnerId: string,
     *   counterpartyCompanyId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->groupId = $values['groupId'];
        $this->companyId = $values['companyId'];
        $this->partnerId = $values['partnerId'];
        $this->counterpartyCompanyId = $values['counterpartyCompanyId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
