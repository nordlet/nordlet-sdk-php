<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsCreateRequestSalaryType: string
{
    case Monthly = "monthly";
    case Hourly = "hourly";
}
