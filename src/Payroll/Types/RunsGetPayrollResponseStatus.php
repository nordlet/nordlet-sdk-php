<?php

namespace Nordlet\Payroll\Types;

enum RunsGetPayrollResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
