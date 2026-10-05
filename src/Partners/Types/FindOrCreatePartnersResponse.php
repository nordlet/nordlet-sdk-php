<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class FindOrCreatePartnersResponse extends JsonSerializableType
{
    /**
     * @var bool $created
     */
    #[JsonProperty('created')]
    public bool $created;

    /**
     * @var FindOrCreatePartnersResponsePartner $partner
     */
    #[JsonProperty('partner')]
    public FindOrCreatePartnersResponsePartner $partner;

    /**
     * @param array{
     *   created: bool,
     *   partner: FindOrCreatePartnersResponsePartner,
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
