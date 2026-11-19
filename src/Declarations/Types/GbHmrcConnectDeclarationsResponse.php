<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use DateTime;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Date;

class GbHmrcConnectDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var DateTime $accessTokenExpiresAt
     */
    #[JsonProperty('accessTokenExpiresAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $accessTokenExpiresAt;

    /**
     * @param array{
     *   accessTokenExpiresAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accessTokenExpiresAt = $values['accessTokenExpiresAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
