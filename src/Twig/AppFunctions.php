<?php

    namespace App\Twig;

    use Twig\Extension\AbstractExtension;
    use Twig\TwigFunction;

    class AppFunctions extends AbstractExtension
    {
        /**
         * @return array
         */
        public function getFunctions(): array
        {
            return [
                new TwigFunction('concatFullName', [$this, 'getFullName']),
            ];
        }

        /**
         * @param  string  $firstName
         * @param  string  $lastName
         * @return string
         */
        public function getFullName(string $firstName, string $lastName): string
        {
            return "$firstName $lastName";
        }
    }
