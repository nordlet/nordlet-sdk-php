<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\PostV1AccountInvitesAcceptRequestLocale;

class PostV1AccountInvitesAcceptRequest extends JsonSerializableType
{
    /**
     * @var string $token
     */
    #[JsonProperty('token')]
    public string $token;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<PostV1AccountInvitesAcceptRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @var ?bool $acceptTerms
     */
    #[JsonProperty('acceptTerms')]
    public ?bool $acceptTerms;

    /**
     * @var ?bool $acceptDpa
     */
    #[JsonProperty('acceptDpa')]
    public ?bool $acceptDpa;

    /**
     * @param array{
     *   token: string,
     *   name?: ?string,
     *   locale?: ?value-of<PostV1AccountInvitesAcceptRequestLocale>,
     *   acceptTerms?: ?bool,
     *   acceptDpa?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->token = $values['token'];
        $this->name = $values['name'] ?? null;
        $this->locale = $values['locale'] ?? null;
        $this->acceptTerms = $values['acceptTerms'] ?? null;
        $this->acceptDpa = $values['acceptDpa'] ?? null;
    }
}
