<?php

namespace Nordlet\Bank\Types;

enum AccountsCreateBankResponseType: string
{
    case Bank = "bank";
    case Stripe = "stripe";
}
