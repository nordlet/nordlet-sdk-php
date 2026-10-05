<?php

namespace Nordlet\Hr\Types;

enum EmployeesRecordsCreateHrRequestType: string
{
    case Education = "education";
    case Qualification = "qualification";
    case Certificate = "certificate";
    case Training = "training";
}
