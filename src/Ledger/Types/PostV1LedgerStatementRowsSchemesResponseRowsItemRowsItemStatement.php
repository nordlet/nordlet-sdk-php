<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerStatementRowsSchemesResponseRowsItemRowsItemStatement: string
{
    case BalanceSheet = "balance_sheet";
    case IncomeStatement = "income_statement";
}
