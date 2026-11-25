<?php

namespace Nordlet\Agreements\Types;

enum AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItemType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
