<?php

namespace Nordlet\Bank\Types;

enum PostV1BankFeedsAccountsConfigureRequestSyncSchedule: string
{
    case Manual = "manual";
    case Daily = "daily";
    case Weekly = "weekly";
    case Monthly = "monthly";
}
