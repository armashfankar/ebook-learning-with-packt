<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use GuzzleHttp\Client;
use App\Models\SubjectMatterExpert;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        //API Request
        $uri = env('PACKT_API').'products?token='.env('PACKT_TOKEN');
        $client = new Client();
        $response = $client->get($uri, []);
        $result = $response->getBody();
        $result = json_decode($result);
        
        $products = [];
        $products_data = $result->products;
        
        foreach($products_data as $product){
            
            $authors = Null;
            $categories = Null;
            $price = 0.00;

            //Authors - Comma Seperated
            if(is_array($product->authors) && count($product->authors) > 0)
            {
                $authors = implode(', ',$product->authors);
            }

            //Categories - Comma Seperated
            if(is_array($product->categories) && count($product->categories) > 0)
            {
                $categories = implode(', ',$product->categories);
            }

            //Price
            $price_uri = env('PACKT_API').'products/'.$product->id.'/price/USD?token='.env('PACKT_TOKEN');

            $client = new Client();
            $response = $client->get($price_uri, []);
            $result = $response->getBody();
            $result = json_decode($result);
            
            if(isset($result->prices) && isset($result->prices->ebook)){
                $price = $result->prices->ebook->USD;
            }

            //Subject Matter Expert ID
            $subject_matter_expert = SubjectMatterExpert::inRandomOrder()->first();

            $products[] = [
                'isbn13' => $product->isbn13,
                'title' => $product->title,
                'publication_date' => $product->publication_date,
                'authors' => $authors,
                'categories' => $categories,
                'concept' =>  $product->concept,
                'language' => $product->language,
                'tool' => $product->tool,
                'vendor' => $product->vendor,
                'price' => $price,
                'subject_matter_expert_id' => $subject_matter_expert->id
            ];
        }

        Product::insert($products);
    }
}
