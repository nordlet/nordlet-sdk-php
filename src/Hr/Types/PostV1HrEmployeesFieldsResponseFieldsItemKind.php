<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesFieldsResponseFieldsItemKind: string
{
    case Text = "text";
    case Select = "select";
    case Date = "date";
}
