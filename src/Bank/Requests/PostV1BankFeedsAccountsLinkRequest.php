<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\PostV1BankFeedsAccountsLinkRequestCreateBankAccount;

class PostV1BankFeedsAccountsLinkRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public ?string $bankAccountId;

    /**
     * @var ?PostV1BankFeedsAccountsLinkRequestCreateBankAccount $createBankAccount
     */
    #[JsonProperty('createBankAccount')]
    public ?PostV1BankFeedsAccountsLinkRequestCreateBankAccount $createBankAccount;

    /**
     * @var ?string $syncFrom
     */
    #[JsonProperty('syncFrom')]
    public ?string $syncFrom;

    /**
     * @param array{
     *   id: string,
     *   bankAccountId?: ?string,
     *   createBankAccount?: ?PostV1BankFeedsAccountsLinkRequestCreateBankAccount,
     *   syncFrom?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->bankAccountId = $values['bankAccountId'] ?? null;
        $this->createBankAccount = $values['createBankAccount'] ?? null;
        $this->syncFrom = $values['syncFrom'] ?? null;
    }
}
