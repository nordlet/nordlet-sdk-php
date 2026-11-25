<?php

namespace Nordlet\Reports\Types;

enum PeriodChecklistReportsResponseItemsItemCode: string
{
    case DraftSaleDocuments = "draft_sale_documents";
    case DraftPurchaseDocuments = "draft_purchase_documents";
    case UnbookedBankLines = "unbooked_bank_lines";
    case DepreciationNotPosted = "depreciation_not_posted";
    case DeferralsNotPosted = "deferrals_not_posted";
    case RecurringInvoicesNotGenerated = "recurring_invoices_not_generated";
    case PayrollRunsNotApproved = "payroll_runs_not_approved";
    case OpenFxReceivables = "open_fx_receivables";
    case OpenFxPayables = "open_fx_payables";
    case BankLedgerDiffersFromStatement = "bank_ledger_differs_from_statement";
    case VatOutsideReturns = "vat_outside_returns";
    case FilingSettingsMissing = "filing_settings_missing";
}
