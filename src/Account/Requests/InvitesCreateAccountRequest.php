<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\InvitesCreateAccountRequestRole;
use Nordlet\Account\Types\InvitesCreateAccountRequestLocale;

class InvitesCreateAccountRequest extends JsonSerializableType
{
    /**
     * @var string $email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var value-of<InvitesCreateAccountRequestRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?value-of<InvitesCreateAccountRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   email: string,
     *   role: value-of<InvitesCreateAccountRequestRole>,
     *   locale?: ?value-of<InvitesCreateAccountRequestLocale>,
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
