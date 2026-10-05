<?php

namespace Nordlet\Bank\Types;

enum ImportTemplatesCreateBankRequestType: string
{
    case Stripe = "stripe";
    case Iso20022 = "iso20022";
    case BankConnection = "bank_connection";
}
