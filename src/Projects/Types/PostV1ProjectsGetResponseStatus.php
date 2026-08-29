<?php

namespace Nordlet\Projects\Types;

enum PostV1ProjectsGetResponseStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Archived = "archived";
}
