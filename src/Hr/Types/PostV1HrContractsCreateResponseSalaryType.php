<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsCreateResponseSalaryType: string
{
    case Monthly = "monthly";
    case Hourly = "hourly";
}
