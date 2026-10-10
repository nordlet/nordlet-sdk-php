<?php

namespace Nordlet\Bank\Types;

enum AccountsListBankResponseRowsItemType: string
{
    case Bank = "bank";
    case Stripe = "stripe";
}
