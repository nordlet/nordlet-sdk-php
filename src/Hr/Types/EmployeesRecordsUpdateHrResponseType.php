<?php

namespace Nordlet\Hr\Types;

enum EmployeesRecordsUpdateHrResponseType: string
{
    case Education = "education";
    case Qualification = "qualification";
    case Certificate = "certificate";
    case Training = "training";
}
