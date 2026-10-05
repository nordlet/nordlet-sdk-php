<?php

namespace Nordlet\Migration\Types;

enum BooksImportMigrationRequestAccountsItemType: string
{
    case Asset = "asset";
    case Liability = "liability";
    case Equity = "equity";
    case Income = "income";
    case Expense = "expense";
}
