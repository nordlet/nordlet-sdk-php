<?php

namespace Nordlet\Bank\Types;

enum PostV1BankSettlementsImportResponseFormat: string
{
    case PayoutReconciliation = "payout_reconciliation";
    case UnifiedPayments = "unified_payments";
}
