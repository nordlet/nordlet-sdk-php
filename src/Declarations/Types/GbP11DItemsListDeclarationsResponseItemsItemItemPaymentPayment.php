<?php

namespace Nordlet\Declarations\Types;

enum GbP11DItemsListDeclarationsResponseItemsItemItemPaymentPayment: string
{
    case DomesticBills = "domestic bills";
    case AccountancyFees = "accountancy fees";
    case PrivateEducation = "private education";
    case PrivateCarExpenses = "private car expenses";
    case SeasonTickets = "season tickets";
    case Other = "other";
    case Multiple = "multiple";
}
