<?php

namespace Nordlet\Agreements\Types;

enum AgreementsExpectedInvoicesAgreementsResponsePeriodsItemPurchaseInvoicesItemStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
    case Reversed = "reversed";
}
