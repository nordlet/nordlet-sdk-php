<?php

namespace Nordlet\Bank\Types;

enum PostV1BankFeedsConnectionsCompleteResponseAccountsItemSyncSchedule: string
{
    case Manual = "manual";
    case Daily = "daily";
    case Weekly = "weekly";
    case Monthly = "monthly";
}
