<?php

namespace Nordlet\Payroll\Types;

enum RunsGetPayrollResponseLinesItemComponentsItemKind: string
{
    case Allowance = "allowance";
    case EmployeeTax = "employee_tax";
    case EmployeeContribution = "employee_contribution";
    case EmployerContribution = "employer_contribution";
    case EmployerPayment = "employer_payment";
}
