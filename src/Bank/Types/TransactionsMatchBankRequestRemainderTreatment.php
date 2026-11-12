<?php

namespace Nordlet\Bank\Types;

enum TransactionsMatchBankRequestRemainderTreatment: string
{
    case Advance = "advance";
    case LeaveOpen = "leave_open";
    case WriteOff = "write_off";
}
