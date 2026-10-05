<?php

namespace Nordlet\Reports\Types;

enum TrialBalanceReportsResponseRowsItemType: string
{
    case Asset = "asset";
    case Liability = "liability";
    case Equity = "equity";
    case Income = "income";
    case Expense = "expense";
}
