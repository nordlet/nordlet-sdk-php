<?php

namespace Nordlet\Payroll\Types;

enum RunsApprovePayrollResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
