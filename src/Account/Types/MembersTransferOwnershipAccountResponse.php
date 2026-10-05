<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class MembersTransferOwnershipAccountResponse extends JsonSerializableType
{
    /**
     * @var string $ownerUserId
     */
    #[JsonProperty('ownerUserId')]
    public string $ownerUserId;

    /**
     * @var string $previousOwnerRole
     */
    #[JsonProperty('previousOwnerRole')]
    public string $previousOwnerRole;

    /**
     * @var ?string $payerUserId
     */
    #[JsonProperty('payerUserId')]
    public ?string $payerUserId;

    /**
     * @param array{
     *   ownerUserId: string,
     *   previousOwnerRole: string,
     *   payerUserId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ownerUserId = $values['ownerUserId'];
        $this->previousOwnerRole = $values['previousOwnerRole'];
        $this->payerUserId = $values['payerUserId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
