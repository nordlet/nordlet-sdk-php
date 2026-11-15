<?php

namespace Nordlet\Review\Types;

enum QueueListReviewResponseItemsItemKind: string
{
    case DraftWarning = "draft_warning";
    case BankTransactionUnbooked = "bank_transaction_unbooked";
    case PartnerVatInvalid = "partner_vat_invalid";
    case FilingSettingsMissing = "filing_settings_missing";
}
