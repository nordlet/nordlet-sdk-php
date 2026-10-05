<?php

namespace Nordlet\Hr\Types;

enum EmployeesRecordsListHrResponseRowsItemType: string
{
    case Education = "education";
    case Qualification = "qualification";
    case Certificate = "certificate";
    case Training = "training";
}
