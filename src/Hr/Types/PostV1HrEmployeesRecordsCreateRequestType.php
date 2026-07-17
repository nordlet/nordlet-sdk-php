<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesRecordsCreateRequestType: string
{
    case Education = "education";
    case Qualification = "qualification";
    case Certificate = "certificate";
    case Training = "training";
}
