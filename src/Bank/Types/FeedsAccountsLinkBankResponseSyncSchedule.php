<?php

namespace Nordlet\Bank\Types;

enum FeedsAccountsLinkBankResponseSyncSchedule: string
{
    case Manual = "manual";
    case Daily = "daily";
    case Weekly = "weekly";
    case Monthly = "monthly";
}
