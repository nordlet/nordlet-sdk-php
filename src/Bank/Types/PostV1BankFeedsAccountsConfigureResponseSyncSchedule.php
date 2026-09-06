<?php

namespace Nordlet\Bank\Types;

enum PostV1BankFeedsAccountsConfigureResponseSyncSchedule: string
{
    case Manual = "manual";
    case Daily = "daily";
    case Weekly = "weekly";
    case Monthly = "monthly";
}
