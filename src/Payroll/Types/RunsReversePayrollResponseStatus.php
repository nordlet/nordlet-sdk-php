<?php

namespace Nordlet\Payroll\Types;

enum RunsReversePayrollResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
    case Reversed = "reversed";
}
