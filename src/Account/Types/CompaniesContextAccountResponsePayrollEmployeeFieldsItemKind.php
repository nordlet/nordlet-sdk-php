<?php

namespace Nordlet\Account\Types;

enum CompaniesContextAccountResponsePayrollEmployeeFieldsItemKind: string
{
    case Text = "text";
    case Select = "select";
    case Date = "date";
}
