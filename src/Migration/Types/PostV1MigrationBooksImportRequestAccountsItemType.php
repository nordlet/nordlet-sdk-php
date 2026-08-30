<?php

namespace Nordlet\Migration\Types;

enum PostV1MigrationBooksImportRequestAccountsItemType: string
{
    case Asset = "asset";
    case Liability = "liability";
    case Equity = "equity";
    case Income = "income";
    case Expense = "expense";
}
