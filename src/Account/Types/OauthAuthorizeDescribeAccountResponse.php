<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class OauthAuthorizeDescribeAccountResponse extends JsonSerializableType
{
    /**
     * @var string $clientName
     */
    #[JsonProperty('clientName')]
    public string $clientName;

    /**
     * @var string $redirectUri
     */
    #[JsonProperty('redirectUri')]
    public string $redirectUri;

    /**
     * @var string $redirectHost
     */
    #[JsonProperty('redirectHost')]
    public string $redirectHost;

    /**
     * @var array<string> $scopes
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public array $scopes;

    /**
     * @param array{
     *   clientName: string,
     *   redirectUri: string,
     *   redirectHost: string,
     *   scopes: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->clientName = $values['clientName'];
        $this->redirectUri = $values['redirectUri'];
        $this->redirectHost = $values['redirectHost'];
        $this->scopes = $values['scopes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
