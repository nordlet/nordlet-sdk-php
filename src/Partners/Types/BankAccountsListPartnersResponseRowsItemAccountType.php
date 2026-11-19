<?php

namespace Nordlet\Partners\Types;

enum BankAccountsListPartnersResponseRowsItemAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
