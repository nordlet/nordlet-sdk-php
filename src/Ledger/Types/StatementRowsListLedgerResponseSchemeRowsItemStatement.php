<?php

namespace Nordlet\Ledger\Types;

enum StatementRowsListLedgerResponseSchemeRowsItemStatement: string
{
    case BalanceSheet = "balance_sheet";
    case IncomeStatement = "income_statement";
}
