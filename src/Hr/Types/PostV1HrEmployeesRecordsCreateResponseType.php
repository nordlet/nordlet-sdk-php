<?php

namespace Nordlet\Hr\Types;

enum PostV1HrEmployeesRecordsCreateResponseType: string
{
    case Education = "education";
    case Qualification = "qualification";
    case Certificate = "certificate";
    case Training = "training";
}
