<?php

namespace Nordlet\Declarations\Types;

enum ConfigsListDeclarationsResponseRowsItemFieldsItemKind: string
{
    case Text = "text";
    case Secret = "secret";
    case Select = "select";
    case Url = "url";
    case Certificate = "certificate";
}
