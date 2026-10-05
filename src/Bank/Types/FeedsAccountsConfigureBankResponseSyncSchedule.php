<?php

namespace Nordlet\Bank\Types;

enum FeedsAccountsConfigureBankResponseSyncSchedule: string
{
    case Manual = "manual";
    case Daily = "daily";
    case Weekly = "weekly";
    case Monthly = "monthly";
}
