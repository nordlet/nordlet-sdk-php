<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\PostV1OfficersUpdateRequestRole;

class PostV1OfficersUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<PostV1OfficersUpdateRequestRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?string $personalCode
     */
    #[JsonProperty('personalCode')]
    public ?string $personalCode;

    /**
     * @var ?string $birthDate
     */
    #[JsonProperty('birthDate')]
    public ?string $birthDate;

    /**
     * @var ?string $appointedOn
     */
    #[JsonProperty('appointedOn')]
    public ?string $appointedOn;

    /**
     * @var ?string $powerNotary
     */
    #[JsonProperty('powerNotary')]
    public ?string $powerNotary;

    /**
     * @var ?string $resignedOn
     */
    #[JsonProperty('resignedOn')]
    public ?string $resignedOn;

    /**
     * @var ?bool $signsAccounts
     */
    #[JsonProperty('signsAccounts')]
    public ?bool $signsAccounts;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   role: value-of<PostV1OfficersUpdateRequestRole>,
     *   personalCode?: ?string,
     *   birthDate?: ?string,
     *   appointedOn?: ?string,
     *   powerNotary?: ?string,
     *   resignedOn?: ?string,
     *   signsAccounts?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->role = $values['role'];
        $this->personalCode = $values['personalCode'] ?? null;
        $this->birthDate = $values['birthDate'] ?? null;
        $this->appointedOn = $values['appointedOn'] ?? null;
        $this->powerNotary = $values['powerNotary'] ?? null;
        $this->resignedOn = $values['resignedOn'] ?? null;
        $this->signsAccounts = $values['signsAccounts'] ?? null;
    }
}
