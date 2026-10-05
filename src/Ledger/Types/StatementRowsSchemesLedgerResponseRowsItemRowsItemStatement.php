<?php

namespace Nordlet\Ledger\Types;

enum StatementRowsSchemesLedgerResponseRowsItemRowsItemStatement: string
{
    case BalanceSheet = "balance_sheet";
    case IncomeStatement = "income_statement";
}
