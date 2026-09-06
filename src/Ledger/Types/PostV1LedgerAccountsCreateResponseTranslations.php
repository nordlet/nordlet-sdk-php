<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerAccountsCreateResponseTranslations extends JsonSerializableType
{
    /**
     * @var ?PostV1LedgerAccountsCreateResponseTranslationsLt $lt
     */
    #[JsonProperty('lt')]
    public ?PostV1LedgerAccountsCreateResponseTranslationsLt $lt;

    /**
     * @var ?PostV1LedgerAccountsCreateResponseTranslationsEn $en
     */
    #[JsonProperty('en')]
    public ?PostV1LedgerAccountsCreateResponseTranslationsEn $en;

    /**
     * @var ?PostV1LedgerAccountsCreateResponseTranslationsRu $ru
     */
    #[JsonProperty('ru')]
    public ?PostV1LedgerAccountsCreateResponseTranslationsRu $ru;

    /**
     * @param array{
     *   lt?: ?PostV1LedgerAccountsCreateResponseTranslationsLt,
     *   en?: ?PostV1LedgerAccountsCreateResponseTranslationsEn,
     *   ru?: ?PostV1LedgerAccountsCreateResponseTranslationsRu,
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
