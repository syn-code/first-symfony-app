<?php
namespace App\Navigation;

class Navigation
{
    /**
     * @return \string[][]
     */
    public function getNavigationLinks(): array
    {
        return [
            [
              'name' => 'home',
              'url' => '/home',
            ],
            [
                'name' => 'about',
                'url' => '/about',
            ],
            [
                'name' => 'contact',
                'url' => '/contact',
            ]
        ];
    }
}
