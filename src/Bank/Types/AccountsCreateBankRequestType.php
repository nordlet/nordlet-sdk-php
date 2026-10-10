<?php

namespace Nordlet\Bank\Types;

enum AccountsCreateBankRequestType: string
{
    case Bank = "bank";
    case Stripe = "stripe";
}
