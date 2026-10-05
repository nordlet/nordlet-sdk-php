<?php

namespace Nordlet\Ledger\Types;

enum AccountsUpdateLedgerResponseType: string
{
    case Asset = "asset";
    case Liability = "liability";
    case Equity = "equity";
    case Income = "income";
    case Expense = "expense";
}
