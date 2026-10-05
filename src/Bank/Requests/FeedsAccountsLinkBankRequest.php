<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\FeedsAccountsLinkBankRequestCreateBankAccount;
use DateTime;
use Nordlet\Core\Types\Date;

class FeedsAccountsLinkBankRequest extends JsonSerializableType
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
     * @var ?FeedsAccountsLinkBankRequestCreateBankAccount $createBankAccount
     */
    #[JsonProperty('createBankAccount')]
    public ?FeedsAccountsLinkBankRequestCreateBankAccount $createBankAccount;

    /**
     * @var ?DateTime $syncFrom
     */
    #[JsonProperty('syncFrom'), Date(Date::TYPE_DATE)]
    public ?DateTime $syncFrom;

    /**
     * @param array{
     *   id: string,
     *   bankAccountId?: ?string,
     *   createBankAccount?: ?FeedsAccountsLinkBankRequestCreateBankAccount,
     *   syncFrom?: ?DateTime,
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
