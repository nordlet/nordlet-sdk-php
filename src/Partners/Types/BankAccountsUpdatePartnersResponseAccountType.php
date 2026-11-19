<?php

namespace Nordlet\Partners\Types;

enum BankAccountsUpdatePartnersResponseAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
