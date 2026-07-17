<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsEndResponseSalaryType: string
{
    case Monthly = "monthly";
    case Hourly = "hourly";
}
