<?php

namespace Nordlet\Hr\Types;

enum EmployeesCreateHrRequestBankAccountType: string
{
    case Checking = "checking";
    case Savings = "savings";
}
