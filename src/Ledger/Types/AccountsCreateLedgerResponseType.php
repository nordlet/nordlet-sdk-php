<?php

namespace Nordlet\Ledger\Types;

enum AccountsCreateLedgerResponseType: string
{
    case Asset = "asset";
    case Liability = "liability";
    case Equity = "equity";
    case Income = "income";
    case Expense = "expense";
}
