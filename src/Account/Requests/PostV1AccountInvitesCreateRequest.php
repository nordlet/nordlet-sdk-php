<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\PostV1AccountInvitesCreateRequestRole;
use Nordlet\Account\Types\PostV1AccountInvitesCreateRequestLocale;

class PostV1AccountInvitesCreateRequest extends JsonSerializableType
{
    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var value-of<PostV1AccountInvitesCreateRequestRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?value-of<PostV1AccountInvitesCreateRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   email: string,
     *   role: value-of<PostV1AccountInvitesCreateRequestRole>,
     *   locale?: ?value-of<PostV1AccountInvitesCreateRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->role = $values['role'];
        $this->locale = $values['locale'] ?? null;
    }
}
