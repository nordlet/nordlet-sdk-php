<?php

namespace Nordlet\Hr\Types;

enum EmployeesUpdateHrResponseBankAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
