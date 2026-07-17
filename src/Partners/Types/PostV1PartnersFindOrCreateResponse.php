<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersFindOrCreateResponse extends JsonSerializableType
{
    /**
     * @var bool $created
     */
    #[JsonProperty('created')]
    public bool $created;

    /**
     * @var PostV1PartnersFindOrCreateResponsePartner $partner
     */
    #[JsonProperty('partner')]
    public PostV1PartnersFindOrCreateResponsePartner $partner;

    /**
     * @param array{
     *   created: bool,
     *   partner: PostV1PartnersFindOrCreateResponsePartner,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->created = $values['created'];
        $this->partner = $values['partner'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
