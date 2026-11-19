<?php

namespace Nordlet\Partners\Types;

enum BankAccountsCreatePartnersResponseAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
