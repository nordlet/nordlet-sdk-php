<?php

namespace Nordlet\Projects\Types;

enum PostV1ProjectsUpdateRequestStatus: string
{
    case Active = "active";
    case Completed = "completed";
    case Archived = "archived";
}
