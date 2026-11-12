<?php

namespace Nordlet\Bank\Types;

enum TransactionsUnignoreBankResponseStatus: string
{
    case New_ = "new";
    case Matched = "matched";
    case Ignored = "ignored";
}
