<?php
namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



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
        $categories = Category::where('is_parent', 1)->get();
        return view('frontend.index', compact('banners', 'newProducts', 'bestSellingProducts', 'categories'));
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
        $cartIds = Cart::where('user_id', auth()->user()->id)->pluck('id');
        $items = CartItem::whereIn('cart_id', $cartIds)->get();
        return view('frontend.cart', compact('items'));
    }

    public function page404()
    {
        return view('frontend.404');
    }

    public function productdetail(Product $product, ProductVariation $variation = null)
    {
        if ($variation == null ){
            $variation = $product->variation;
        }
        return view('frontend.productdetail', compact('product', 'variation'));
    }

    public function wishlist()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('frontend.wishlist', compact('wishlists'));
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
        $user = auth()->user();
        return view('frontend.profile', compact('user'));
    }

    public function orderhistory()
    {
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        return view('frontend.orderhistory', compact('orders'));
    }

    public function cancel()
    {
        return view('frontend.cancel');
    }

    public function checkout()
    {
        $cartIds = Cart::where('user_id', auth()->user()->id)->pluck('id');
        $items = CartItem::whereIn('cart_id', $cartIds)->get();
        return view('frontend.checkout', compact('items'));
    }

    public function orderconfirmation(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'pincode' => 'required',
            'country' => 'required',
            'address1' => 'required',
            'address2' => '',
            'phone' => 'required',

        ]);

        UserAddress::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'pincode' => $request->pincode,
                'country' => $request->country,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'phone' => $request->phone,
            ],
        );
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

    public function track()
    {
        return view('frontend.track');
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

    public function updateProfile(Request $request, User $user)
    {
        // First, validate the other fields
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'password' => 'nullable|min:8',
            'confirm_password' => 'same:password',
        ]);

        // Now check the current password manually
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        // Update the user's profile
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;

        // Update the password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Save the user
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }

}
