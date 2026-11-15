<?php

namespace Nordlet\Ledger\Types;

enum FxRevaluationRunLedgerResponseLinesItemKind: string
{
    case Receivable = "receivable";
    case Payable = "payable";
    case Bank = "bank";
}
