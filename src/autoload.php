<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'clansofcaledonia\\exception' => '/Exception.php',
                'clansofcaledonia\\good' => '/Good.php',
                'clansofcaledonia\\market' => '/Market.php',
                'clansofcaledonia\\milk' => '/Milk.php',
                'clansofcaledonia\\offer' => '/Offer.php',
                'clansofcaledonia\\outofrangeexception' => '/OutOfRangeException.php',
                'clansofcaledonia\\pound' => '/Pound.php',
                'clansofcaledonia\\pricelist' => '/PriceList.php',
                'clansofcaledonia\\pricelistbuilder' => '/PriceListBuilder.php',
                'clansofcaledonia\\quantity' => '/Quantity.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
