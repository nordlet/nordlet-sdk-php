<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerAccountsCreateRequestTranslations extends JsonSerializableType
{
    /**
     * @var ?PostV1LedgerAccountsCreateRequestTranslationsLt $lt
     */
    #[JsonProperty('lt')]
    public ?PostV1LedgerAccountsCreateRequestTranslationsLt $lt;

    /**
     * @var ?PostV1LedgerAccountsCreateRequestTranslationsEn $en
     */
    #[JsonProperty('en')]
    public ?PostV1LedgerAccountsCreateRequestTranslationsEn $en;

    /**
     * @var ?PostV1LedgerAccountsCreateRequestTranslationsRu $ru
     */
    #[JsonProperty('ru')]
    public ?PostV1LedgerAccountsCreateRequestTranslationsRu $ru;

    /**
     * @param array{
     *   lt?: ?PostV1LedgerAccountsCreateRequestTranslationsLt,
     *   en?: ?PostV1LedgerAccountsCreateRequestTranslationsEn,
     *   ru?: ?PostV1LedgerAccountsCreateRequestTranslationsRu,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->lt = $values['lt'] ?? null;
        $this->en = $values['en'] ?? null;
        $this->ru = $values['ru'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
