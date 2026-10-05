<?php

namespace Nordlet\Ledger\Types;

enum StatementRowsListLedgerResponseRowsItemStatement: string
{
    case BalanceSheet = "balance_sheet";
    case IncomeStatement = "income_statement";
}
