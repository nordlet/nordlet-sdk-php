<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerAccountsListResponseRowsItemTranslations extends JsonSerializableType
{
    /**
     * @var ?PostV1LedgerAccountsListResponseRowsItemTranslationsLt $lt
     */
    #[JsonProperty('lt')]
    public ?PostV1LedgerAccountsListResponseRowsItemTranslationsLt $lt;

    /**
     * @var ?PostV1LedgerAccountsListResponseRowsItemTranslationsEn $en
     */
    #[JsonProperty('en')]
    public ?PostV1LedgerAccountsListResponseRowsItemTranslationsEn $en;

    /**
     * @var ?PostV1LedgerAccountsListResponseRowsItemTranslationsRu $ru
     */
    #[JsonProperty('ru')]
    public ?PostV1LedgerAccountsListResponseRowsItemTranslationsRu $ru;

    /**
     * @param array{
     *   lt?: ?PostV1LedgerAccountsListResponseRowsItemTranslationsLt,
     *   en?: ?PostV1LedgerAccountsListResponseRowsItemTranslationsEn,
     *   ru?: ?PostV1LedgerAccountsListResponseRowsItemTranslationsRu,
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
