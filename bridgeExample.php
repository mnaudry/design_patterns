<?php
require_once __DIR__."/vendor/autoload.php";

use Mnaudry\Patterns\StructuralPatterns\Bridge\Page;
use Mnaudry\Patterns\StructuralPatterns\Bridge\SimplePage;
use Mnaudry\Patterns\StructuralPatterns\Bridge\HTMLRenderer;
use Mnaudry\Patterns\StructuralPatterns\Bridge\JSONRenderer;
use Mnaudry\Patterns\StructuralPatterns\Bridge\Product;
use Mnaudry\Patterns\StructuralPatterns\Bridge\ProductPage;

function printPage(Page $page) {
   return $page->view();
}
$title = "My first page";
$renderer = new HTMLRenderer($title,"en-CA");
$content = "Hello , My name is mnaudry, I'm Senior Developer";

$page = new SimplePage($renderer,$title,$content);


$product = new Product(1,"mcintosh","apple (McIntosh)","McIntosh Red, or colloquially the Mac, is an apple cultivar, the national apple of Canada. The fruit has red and green skin, a tart flavour, and tender white flesh, which ripens in late September. In the 20th century it was the most popular cultivar in Eastern Canada and New England, and is considered an all-purpose apple, suitable both for cooking and eating raw","/images/mcintosh.jpg",1.50);
$rendererPage = new HTMLRenderer($product->getTtile(),"en-CA");
$productPage = new ProductPage($product,$rendererPage);
$productPage->changeRenderer($rendererPage);


echo printPage($page);
echo "\n======================================\n";

$renderer = new JSONRenderer();
$page->changeRenderer($renderer);
echo printPage($page);

echo "\n======================================\n";

echo printPage($productPage);

echo "\n======================================\n";

$productPage->changeRenderer($renderer);
echo printPage($productPage);