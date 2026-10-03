<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsDeReturnsGenerateRequestRuleKey: string
{
    case DeEBilanz = "de-e-bilanz";
    case DeCitReturn = "de-cit-return";
    case DeTradeTax = "de-trade-tax";
    case DeTradeTaxApportionment = "de-trade-tax-apportionment";
    case DeAnnualVatReturn = "de-annual-vat-return";
    case DePayrollWithholding = "de-payroll-withholding";
    case DePayrollStatements = "de-payroll-statements";
}
