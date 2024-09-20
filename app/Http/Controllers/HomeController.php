<?php
namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    // Method for home page
    public function index()
    {
        $banners = Banner::where('status', 'active')->get();

        $newProducts = Product::orderBy('created_at', 'desc')->limit(5)->get();
        $bestSellingProductsIds = Cart::select('product_id', DB::raw('COUNT(product_id) as total_sales'))
            ->groupBy('product_id')
            ->orderBy('total_sales', 'DESC')
            ->take(5)
            ->pluck('product_id');
        $bestSellingProducts = Product::whereIn('id', $bestSellingProductsIds)->get();
        return view('frontend.index', compact('banners', 'newProducts', 'bestSellingProducts'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function alljewellery($material = null)
    {
        if ($material){
            $products = Product::where('material', $material)->get();
        }else{
            $products = Product::all();
        }
        return view('frontend.alljewellery', compact('products'));
    }

    public function diamondjewellery()
    {
        return view('frontend.diamondjewellery');
    }

    public function silver()
    {
        return view('frontend.silver');
    }

    public function gold()
    {
        return view('frontend.gold');
    }

    public function bullions()
    {
        return view('frontend.bullions');
    }

    public function showBlogs()
    {
        return view('frontend.blogs');
    }

    public function showBlogDetails()
    {
        return view('frontend.blog-details');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function policies()
    {
        return view('frontend.policies');
    }

    public function giritraPromises()
    {
        return view('frontend.giritra-promises');
    }

    public function cart()
    {
        $items = auth()->user()->carts;
        return view('frontend.cart', compact('items'));
    }

    public function page404()
    {
        return view('frontend.404');
    }

    public function productdetail(Product $product)
    {
        return view('frontend.productdetail', compact('product'));
    }

    public function wishlist()
    {
        return view('frontend.wishlist');
    }

    // Method for login page
    public function login()
    {
        return view('frontend.login');
    }

    // Method for signup page
    public function signup()
    {
        return view('frontend.signup');
    }

    public function showForgotPasswordForm()
    {
        return view('frontend.forgot-password');
    }

    public function showResetPasswordForm()
    {
        return view('frontend.reset-password');
    }

    public function profile()
    {
        return view('frontend.profile');
    }

    public function orderhistory()
    {
        return view('frontend.orderhistory');
    }

    public function cancel()
    {
        return view('frontend.cancel');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function orderconfirmation()
    {
        return view('frontend.orderconfirmation');
    }

    public function ordersummary()
    {
        return view('frontend.order-summary');
    }

    public function paymentconfirmation()
    {
        return view('frontend.payment-confirmation');
    }

    public function thankyou()
    {
        return view('frontend.thank-you');
    }
    public function storelocator()
    {
        return view('frontend.storelocator');
    }
    // Method for franchise page
    public function franchise()
    {
        return view('frontend.franchise');
    }

    public function collection()
    {
        return view('frontend.collection');
    }

    public function collectiondetails()
    {
        return view('frontend.collectiondetails');
    }

    // cumtomize jewwlery
    public function customjewellery()
    {
        return view('frontend.customjewellery');
    }
    // OUR STORY
    public function ourstory(){
        return view('frontend.ourstory');
    }
    // care guide
    public function jewellerycareguide(){
        return view('frontend.jewellerycareguide');
    }
    // GEMSTONE
    public function gemstone(){
        return view('frontend.gemstone');
    }
}
