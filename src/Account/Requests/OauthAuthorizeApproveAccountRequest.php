<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class OauthAuthorizeApproveAccountRequest extends JsonSerializableType
{
    /**
     * @var string $clientId
     */
    #[JsonProperty('clientId')]
    public string $clientId;

    /**
     * @var ?string $redirectUri
     */
    #[JsonProperty('redirectUri')]
    public ?string $redirectUri;

    /**
     * @var ?string $responseType
     */
    #[JsonProperty('responseType')]
    public ?string $responseType;

    /**
     * @var ?string $codeChallenge
     */
    #[JsonProperty('codeChallenge')]
    public ?string $codeChallenge;

    /**
     * @var ?string $codeChallengeMethod
     */
    #[JsonProperty('codeChallengeMethod')]
    public ?string $codeChallengeMethod;

    /**
     * @var ?string $state
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $scope
     */
    #[JsonProperty('scope')]
    public ?string $scope;

    /**
     * @var ?string $resource
     */
    #[JsonProperty('resource')]
    public ?string $resource;

    /**
     * @param array{
     *   clientId: string,
     *   redirectUri?: ?string,
     *   responseType?: ?string,
     *   codeChallenge?: ?string,
     *   codeChallengeMethod?: ?string,
     *   state?: ?string,
     *   scope?: ?string,
     *   resource?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->clientId = $values['clientId'];
        $this->redirectUri = $values['redirectUri'] ?? null;
        $this->responseType = $values['responseType'] ?? null;
        $this->codeChallenge = $values['codeChallenge'] ?? null;
        $this->codeChallengeMethod = $values['codeChallengeMethod'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->scope = $values['scope'] ?? null;
        $this->resource = $values['resource'] ?? null;
    }
}
