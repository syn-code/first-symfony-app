<?php
namespace App\Navigation;

class Navigation
{
    public function __invoke(): array
    {
        return [
            [
              'name' => 'home',
              'url' => 'home',
            ],
            [
                'name' => 'about',
                'url' => 'about',
            ],
            [
                'name' => 'contact',
                'url' => 'contact',
            ]
        ];
    }
}
