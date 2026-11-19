<?php

namespace Nordlet\Partners\Types;

enum BankAccountsCreatePartnersRequestAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
