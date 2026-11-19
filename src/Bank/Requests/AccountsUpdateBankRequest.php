<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\AccountsUpdateBankRequestType;
use Nordlet\Bank\Types\AccountsUpdateBankRequestPaymentFileSettings;

class AccountsUpdateBankRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<AccountsUpdateBankRequestType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $bankCode Sort code, routing number or other national bank code, for an account without an IBAN
     */
    #[JsonProperty('bankCode')]
    public ?string $bankCode;

    /**
     * @var ?string $bankAccountNumber Account number, for an account without an IBAN
     */
    #[JsonProperty('bankAccountNumber')]
    public ?string $bankAccountNumber;

    /**
     * @var ?AccountsUpdateBankRequestPaymentFileSettings $paymentFileSettings What the bank gave the company for payment files from this account: the Bacs service user number for a UK account, the ACH Immediate Origin and Company Identification for a US account
     */
    #[JsonProperty('paymentFileSettings')]
    public ?AccountsUpdateBankRequestPaymentFileSettings $paymentFileSettings;

    /**
     * @var ?string $accountCode
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

    /**
     * @var ?bool $isActive
     */
    #[JsonProperty('isActive')]
    public ?bool $isActive;

    /**
     * @param array{
     *   id: string,
     *   name?: ?string,
     *   type?: ?value-of<AccountsUpdateBankRequestType>,
     *   iban?: ?string,
     *   bankCode?: ?string,
     *   bankAccountNumber?: ?string,
     *   paymentFileSettings?: ?AccountsUpdateBankRequestPaymentFileSettings,
     *   accountCode?: ?string,
     *   isActive?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->bankCode = $values['bankCode'] ?? null;
        $this->bankAccountNumber = $values['bankAccountNumber'] ?? null;
        $this->paymentFileSettings = $values['paymentFileSettings'] ?? null;
        $this->accountCode = $values['accountCode'] ?? null;
        $this->isActive = $values['isActive'] ?? null;
    }
}
