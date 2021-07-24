<?php


namespace Rock\Menu\Items;


final class SystemMenuItem extends MenuItem
{

    public function __construct(string $label, string $routeName, array $routeParameters, ?string $icon)
    {
        parent::__construct($label, $routeName, $routeParameters, $icon);

        $this->setType(MenuItem::TYPE_SYSTEM);
    }

}