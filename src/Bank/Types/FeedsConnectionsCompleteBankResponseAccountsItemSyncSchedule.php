<?php

namespace Nordlet\Bank\Types;

enum FeedsConnectionsCompleteBankResponseAccountsItemSyncSchedule: string
{
    case Manual = "manual";
    case Daily = "daily";
    case Weekly = "weekly";
    case Monthly = "monthly";
}
