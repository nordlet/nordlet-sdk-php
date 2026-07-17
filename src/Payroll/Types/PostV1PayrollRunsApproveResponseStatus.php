<?php

namespace Nordlet\Payroll\Types;

enum PostV1PayrollRunsApproveResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
