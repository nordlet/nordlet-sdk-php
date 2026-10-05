<?php

namespace Nordlet\Payroll\Types;

enum RunsCreatePayrollResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
