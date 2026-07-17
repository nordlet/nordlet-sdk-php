<?php

namespace Nordlet\Payroll\Types;

enum PostV1PayrollRunsCreateResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
