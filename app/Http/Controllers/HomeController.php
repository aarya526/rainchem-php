<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\ContactUs;
use App\Models\ContractManufacturing;
<<<<<<< HEAD
use App\Models\CustomerSupport;
=======
>>>>>>> a0cdf8c882511000fac8e861652df1ac7876b66b
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class HomeController extends Controller
{
    //

    public function index()
    {
        $categories = category::where('isActive', 1)->paginate(4);
        return view('index', compact('categories'));
    }

    public function loadMoreCategories(Request $request)
    {
        $skip = $request->input('skip'); // Tracks how many categories to skip
        $categories = category::where('isActive', 1)->skip($skip)->take(8)->get(); // Load 8 more categories
        return response()->json($categories);
    }

    public function viewCategoryPages($categoryName, $id)
    {
        $c = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->where('activeStatus', 1)->get();
        $data = compact('c', 'products');
        return view('categoryViewPage')->with($data);
    }

    public function viewSingleProductDetails($id)
    {
        $singleProduct = Product::with('category')->findOrFail($id);
        $products = Product::with('category')->where('activeStatus', 1)->get();
        $data = compact('singleProduct', 'products');
        return view('singleProductDetails')->with($data);
    }

    public function submitContractForm(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
<<<<<<< HEAD
        $contractForm = new CustomerSupport();
        $contractForm->supportType = "contract";
        $contractForm->company = $request->company_name;
=======
        $contractForm = new ContractManufacturing();
        $contractForm->companyName = $request->company_name;
>>>>>>> a0cdf8c882511000fac8e861652df1ac7876b66b
        $contractForm->fullName = $request->full_name;
        $contractForm->phone = $request->phone;
        $contractForm->email = $request->email;
        $contractForm->subject = $request->subject;
        $contractForm->message = $request->message;
        $contractForm->dateCreated = now();
        $contractForm->save();
        return response()->json(['message' => 'Form submitted successfully!']);
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function blog()
    {
        return view('blog');
    }

    public function careers()
    {
        return view('careers');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function submitContactForm(Request $request)
    {
        $validated = $request->validate([
<<<<<<< HEAD
            // 'company_name' => 'string|max:255',
=======
            'company_name' => 'string|max:255',
>>>>>>> a0cdf8c882511000fac8e861652df1ac7876b66b
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000'
        ]);

<<<<<<< HEAD
        $contact = new CustomerSupport();
        $contact->supportType = "other";
        $contact->company = $request->company_name;
=======
        $contact = new ContactUs();
        $contact->companyName = $request->company_name;
>>>>>>> a0cdf8c882511000fac8e861652df1ac7876b66b
        $contact->fullName = $request->full_name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->dateCreated = now();
        $contact->save();
        return redirect('/contactUs')->with('Success', " Your Request is Submitted Successfully! We will revert to you shortly.");
    }
<<<<<<< HEAD
    public function requestaquoteForm()
    {
        return view('requestQuote');
    }


    public function requestaquoteFormPost(Request $request)
    {
        $validated = $request->validate([
            // 'company_name' => 'string|max:255',
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'appointmentDate' => 'required|string|max:5000'
        ]);

        $contact = new CustomerSupport();
        $contact->supportType = "quote";
        $contact->company = $request->company_name;
        $contact->fullName = $request->full_name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->appointmentDate = $request->appointmentDate;
        $contact->dateCreated = now();
        $contact->save();
        return redirect('/requestaquote')->with('Success', " Your Request is Submitted Successfully! Our representatives will call you shortly.");
    }

=======
>>>>>>> a0cdf8c882511000fac8e861652df1ac7876b66b

    public function privacyPolicy()
    {
        return view('privacyPolicy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function vendorRegistration()
    {
        return view('vendorRegistration');
    }
}
