<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\PostV1AccountLoginLinkRequestRequestLocale;

class PostV1AccountLoginLinkRequestRequest extends JsonSerializableType
{
    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?value-of<PostV1AccountLoginLinkRequestRequestLocale> $locale
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
     * @var ?string $referralCode
     */
    #[JsonProperty('referralCode')]
    public ?string $referralCode;

    /**
     * @param array{
     *   email: string,
     *   locale?: ?value-of<PostV1AccountLoginLinkRequestRequestLocale>,
     *   acceptTerms?: ?bool,
     *   acceptDpa?: ?bool,
     *   referralCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->locale = $values['locale'] ?? null;
        $this->acceptTerms = $values['acceptTerms'] ?? null;
        $this->acceptDpa = $values['acceptDpa'] ?? null;
        $this->referralCode = $values['referralCode'] ?? null;
    }
}
