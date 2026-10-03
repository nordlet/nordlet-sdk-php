<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsTaxPaymentsListRequestTax: string
{
    case CorporateIncomeTax = "corporate_income_tax";
    case PayrollWithholding = "payroll_withholding";
    case Vat = "vat";
    case SocialInsurance = "social_insurance";
    case Other = "other";
}
