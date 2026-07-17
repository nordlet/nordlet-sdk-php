<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesRecordsUpdateRequestType: string
{
    case Education = "education";
    case Qualification = "qualification";
    case Certificate = "certificate";
    case Training = "training";
}
