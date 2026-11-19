<?php

namespace Nordlet\Hr\Types;

enum EmployeesUpdateHrRequestBankAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
