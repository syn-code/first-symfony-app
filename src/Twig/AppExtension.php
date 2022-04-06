<?php

    namespace App\Twig;
    use Twig\Extension\AbstractExtension;
    use Twig\TwigFilter;

    class AppExtension extends AbstractExtension
    {
        /**
         * we call this function if we want to use a filter
         * @return TwigFilter[]
         */
        public function getFilters(): array
        {
            return [
              new TwigFilter('price', [$this, 'formatPrice']),
            ];
        }

        /**
         * @param  float  $number
         * @param  int  $decimals
         * @param  string  $decPoint
         * @param  string  $thousandSep
         * @return string
         */
        public function formatPrice(
            float $number,
            int $decimals = 0,
            string $decPoint = '.',
            string $thousandSep = ',')
        : string {
            $price = number_format($number, $decimals, $decPoint, $thousandSep);
            return '$'.$price;
        }
    }
