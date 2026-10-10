<?php

namespace Nordlet\Bank\Types;

enum AccountsUpdateBankResponseType: string
{
    case Bank = "bank";
    case Stripe = "stripe";
}
