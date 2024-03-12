<?php
namespace App\Tests\Entity;
use App\Entity\Product;
use PHPUnit\Framework\TestCase;
class ProductTest extends TestCase
{

    //Implémentation test unitaire
    //Nom d'une méthode doit débuter par "test" et autant de méthodes que de return + nom compréhensible

    //Test 1 - lorsque le type vaut "food"
    public function testcomputeTVAFoodProduct()
    {
                $product = new Product('Un produit', Product::FOOD_PRODUCT, 20);
       $this->assertSame(1.1, $product->computeTVA());
    }

    //Test 2 - lorsque le type est différent de "food"
    public function testcomputeOtherTVAFoodProduct()
    {
                $product = new Product('Un produit', 'Autre', 20);
       $this->assertSame(3.92, $product->computeTVA());
    }

    //3.92
    // //Test 3 - lorsque le prix est strictement infèrieur à 0
    // public function testNegativePriceComputeTVA()
    // {
    //             $product = new Product('Un produit', Product::FOOD_PRODUCT, -1);
    //    $this->expectException('Exception');
    //    $product->computeTVA();
    // }

    //Test 4 - @dataProvider pricesForFoodProduct

   /**
   * @dataProvider pricesForFoodProduct
   */

    public function testcomputeTVAFoodProduct2($price, $expectedTva)
    {
                $product = new Product('Un produit', Product::FOOD_PRODUCT, $price);
                        $this->assertSame($expectedTva, $product->computeTVA());
    }
    public function pricesForFoodProduct()
    {
        return [
            [0, 0.0],
            [20, 1.1],
            [100, 5.5]
        ];
    }

}