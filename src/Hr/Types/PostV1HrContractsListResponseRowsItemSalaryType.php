<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsListResponseRowsItemSalaryType: string
{
    case Monthly = "monthly";
    case Hourly = "hourly";
}
