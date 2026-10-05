<?php

namespace Nordlet\Declarations\Types;

enum ConfigsUpdateDeclarationsResponseFieldsItemKind: string
{
    case Text = "text";
    case Secret = "secret";
    case Select = "select";
    case Url = "url";
    case Certificate = "certificate";
}
