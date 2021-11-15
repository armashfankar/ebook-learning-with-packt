<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\SubjectMatterExpert;
use GuzzleHttp\Client;

class PageController extends Controller
{
    /**
     * Define consturctor for models
     * Consturctor will help fetching data from designated Models.
    */
    public function __construct()
    {
        $this->product = new Product;
        $this->expert = new SubjectMatterExpert;
    }

    /**
     * Index
     * Home page will require Product List & Subject Matter Expert List
    */
    public function index()
    {
        $products = $this->product->fetchPopularProducts();
        $experts = $this->expert->fetchTopExperts();
        return view('client.pages.index',compact('products','experts'));
    }

    /**
     * Subject Matter Experts
     * Subject Matter Experts page will require list of all the experts
    */
    public function experts()
    {
        $experts = $this->expert->fetchAllExperts();
        return view('client.pages.experts',compact('experts'));
    }

    /**
     * eBooks
     * eBooks page will require list of all the eBooks with pagination
    */
    public function eBooks()
    {
        $products = $this->product->fetchAllProducts();
        return view('client.pages.eBooks',compact('products'));
    }

    /**
     * eBook Detail
     * eBook detail page will require product detail and also external api call
     * to packt where it will fetch other details.
    */
    public function eBookDetail($isbn)
    {
        $product = $this->product->fetchProduct($isbn);

        //if product not found then redirect back with error.
        if(empty($product)){
            Session::flash('error','eBook not found!');
            return Redirect::back();
        }

        //fetch Subject Matter Expert
        $expert = $this->expert->fetchExpertDetail($product->subject_matter_expert_id);

        //fetch product detail from Packt API
        $uri = env('PACKT_API').'products/'.$product->isbn13.'?token='.env('PACKT_TOKEN');
        $client = new Client();
        $response = $client->get($uri, []);
        $product_data = $response->getBody();
        $product_data = json_decode($product_data);
        return view('client.pages.eBook-detail',compact('product','expert','product_data'));
    }

    public function eBookPdf($isbn)
    {
        $product = $this->product->fetchProduct($isbn);

        //if product not found then redirect back with error.
        if(empty($product)){
            Session::flash('error','eBook not found!');
            return Redirect::back();
        }

        return view('client.pages.eBook-pdf',compact('product'));
    }

    public function chatRoom($isbn)
    {
        $product = $this->product->fetchProduct($isbn);

        //if product not found then redirect back with error.
        if(empty($product)){
            Session::flash('error','eBook not found!');
            return Redirect::back();
        }

        return view('client.pages.chat-room',compact('product'));
    }

    /**
     * Logout
     * This function will close client's active session and redirect it back
     * to the index screen.
     *
    */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('client.index');
    }
}
