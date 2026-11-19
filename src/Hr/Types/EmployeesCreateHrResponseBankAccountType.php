<?php

namespace Nordlet\Hr\Types;

enum EmployeesCreateHrResponseBankAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
