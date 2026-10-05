<?php

namespace Nordlet\Bank\Types;

enum FeedsConnectionsGetBankResponseAccountsItemSyncSchedule: string
{
    case Manual = "manual";
    case Daily = "daily";
    case Weekly = "weekly";
    case Monthly = "monthly";
}
