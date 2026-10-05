<?php

namespace Nordlet\Hr\Types;

enum EmployeesRecordsUpdateHrRequestType: string
{
    case Education = "education";
    case Qualification = "qualification";
    case Certificate = "certificate";
    case Training = "training";
}
