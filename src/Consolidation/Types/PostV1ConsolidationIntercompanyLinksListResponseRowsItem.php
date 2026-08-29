<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationIntercompanyLinksListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $partnerName
     */
    #[JsonProperty('partnerName')]
    public string $partnerName;

    /**
     * @var string $counterpartyCompanyId
     */
    #[JsonProperty('counterpartyCompanyId')]
    public string $counterpartyCompanyId;

    /**
     * @var string $counterpartyCompanyName
     */
    #[JsonProperty('counterpartyCompanyName')]
    public string $counterpartyCompanyName;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   companyId: string,
     *   companyName: string,
     *   partnerId: string,
     *   partnerName: string,
     *   counterpartyCompanyId: string,
     *   counterpartyCompanyName: string,
     *   createdAt: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->companyId = $values['companyId'];
        $this->companyName = $values['companyName'];
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'];
        $this->counterpartyCompanyId = $values['counterpartyCompanyId'];
        $this->counterpartyCompanyName = $values['counterpartyCompanyName'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
