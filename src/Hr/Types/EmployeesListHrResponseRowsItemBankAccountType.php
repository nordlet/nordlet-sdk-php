<?php

namespace Nordlet\Hr\Types;

enum EmployeesListHrResponseRowsItemBankAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
