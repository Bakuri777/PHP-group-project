<?php
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function isActivePage($pageKey, $activePage)
{
    return $pageKey === $activePage ? 'active' : '';
}
