<?php

namespace Nordlet\Hr\Types;

enum EmployeesAnonymizeHrResponseBankAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
