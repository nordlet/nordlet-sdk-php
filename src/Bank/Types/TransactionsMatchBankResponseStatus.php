<?php

namespace Nordlet\Bank\Types;

enum TransactionsMatchBankResponseStatus: string
{
    case New_ = "new";
    case Matched = "matched";
}
