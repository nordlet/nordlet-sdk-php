<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsTaxAdjustmentsCreateRequestKind: string
{
    case NonDeductible = "non_deductible";
    case IncomeIncrease = "income_increase";
    case NonTaxableIncome = "non_taxable_income";
    case ExcludedIncome = "excluded_income";
    case DeductibleAdjustment = "deductible_adjustment";
    case Donation = "donation";
    case LossCarriedForward = "loss_carried_forward";
    case InvestmentRelief = "investment_relief";
    case ForeignTaxCredit = "foreign_tax_credit";
    case TaxReduction = "tax_reduction";
}
