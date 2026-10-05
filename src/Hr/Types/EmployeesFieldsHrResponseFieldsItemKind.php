<?php

namespace Nordlet\Hr\Types;

enum EmployeesFieldsHrResponseFieldsItemKind: string
{
    case Text = "text";
    case Select = "select";
    case Date = "date";
}
