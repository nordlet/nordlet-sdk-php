<?php

namespace Nordlet\Payroll\Types;

enum PostV1PayrollRunsGetResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
