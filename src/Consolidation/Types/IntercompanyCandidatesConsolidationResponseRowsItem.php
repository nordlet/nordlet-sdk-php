<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class IntercompanyCandidatesConsolidationResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $memberCompanyId
     */
    #[JsonProperty('memberCompanyId')]
    public string $memberCompanyId;

    /**
     * @var string $memberName
     */
    #[JsonProperty('memberName')]
    public string $memberName;

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
     * @var ?string $partnerCode
     */
    #[JsonProperty('partnerCode')]
    public ?string $partnerCode;

    /**
     * @var string $matchesCompanyId
     */
    #[JsonProperty('matchesCompanyId')]
    public string $matchesCompanyId;

    /**
     * @var string $matchesCompanyName
     */
    #[JsonProperty('matchesCompanyName')]
    public string $matchesCompanyName;

    /**
     * @var value-of<IntercompanyCandidatesConsolidationResponseRowsItemMatchedOn> $matchedOn
     */
    #[JsonProperty('matchedOn')]
    public string $matchedOn;

    /**
     * @var ?string $linkId
     */
    #[JsonProperty('linkId')]
    public ?string $linkId;

    /**
     * @param array{
     *   memberCompanyId: string,
     *   memberName: string,
     *   partnerId: string,
     *   partnerName: string,
     *   matchesCompanyId: string,
     *   matchesCompanyName: string,
     *   matchedOn: value-of<IntercompanyCandidatesConsolidationResponseRowsItemMatchedOn>,
     *   partnerCode?: ?string,
     *   linkId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->memberCompanyId = $values['memberCompanyId'];
        $this->memberName = $values['memberName'];
        $this->partnerId = $values['partnerId'];
        $this->partnerName = $values['partnerName'];
        $this->partnerCode = $values['partnerCode'] ?? null;
        $this->matchesCompanyId = $values['matchesCompanyId'];
        $this->matchesCompanyName = $values['matchesCompanyName'];
        $this->matchedOn = $values['matchedOn'];
        $this->linkId = $values['linkId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
