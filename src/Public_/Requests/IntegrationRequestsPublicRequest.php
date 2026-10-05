<?php

namespace Nordlet\Public_\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class IntegrationRequestsPublicRequest extends JsonSerializableType
{
    /**
     * @var string $integration
     */
    #[JsonProperty('integration')]
    public string $integration;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $company
     */
    #[JsonProperty('company')]
    public ?string $company;

    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $details
     */
    #[JsonProperty('details')]
    public ?string $details;

    /**
     * @var ?string $website
     */
    #[JsonProperty('website')]
    public ?string $website;

    /**
     * @param array{
     *   integration: string,
     *   name: string,
     *   email: string,
     *   company?: ?string,
     *   details?: ?string,
     *   website?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->integration = $values['integration'];
        $this->name = $values['name'];
        $this->company = $values['company'] ?? null;
        $this->email = $values['email'];
        $this->details = $values['details'] ?? null;
        $this->website = $values['website'] ?? null;
    }
}
