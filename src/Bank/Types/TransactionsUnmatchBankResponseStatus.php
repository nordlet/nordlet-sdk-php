<?php

namespace Nordlet\Bank\Types;

enum TransactionsUnmatchBankResponseStatus: string
{
    case New_ = "new";
    case Matched = "matched";
}
