<?php

namespace Nordlet\Bank\Types;

enum PostV1BankFeedsConnectionsGetResponseAccountsItemSyncSchedule: string
{
    case Manual = "manual";
    case Daily = "daily";
    case Weekly = "weekly";
    case Monthly = "monthly";
}
