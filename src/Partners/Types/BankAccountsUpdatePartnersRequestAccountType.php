<?php

namespace Nordlet\Partners\Types;

enum BankAccountsUpdatePartnersRequestAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
