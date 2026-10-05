<?php

namespace Nordlet\Bank\Types;

enum SettlementsImportBankResponseFormat: string
{
    case PayoutReconciliation = "payout_reconciliation";
    case UnifiedPayments = "unified_payments";
}
