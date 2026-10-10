<?php

namespace Nordlet\Bank\Types;

enum AccountsUpdateBankRequestType: string
{
    case Bank = "bank";
    case Stripe = "stripe";
}
