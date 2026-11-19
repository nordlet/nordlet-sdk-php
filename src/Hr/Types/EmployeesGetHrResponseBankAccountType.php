<?php

namespace Nordlet\Hr\Types;

enum EmployeesGetHrResponseBankAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
