@extends('website.master')
@section('contents')

<!-- title -->
<section class="Laptop-Deal-title"> <br>
    <div class="container">
        <div class="title text-center p-4 border border-dark">
            <p>স্টার টেক অনলাইন শপ অথবা যেকোন আউটলেট থেকে Palit, MSI, ASUS সহ

                জনপ্রিয় সব ব্র্যান্ডের গ্রাফিক্স কার্ড কিনলেই পাচ্ছেন সর্বোচ্চ ৯৫০০ টাকা পর্যন্ত মূল্যছাড়! এছাড়াও সর্বোচ্চ ২৭০০০ টাকা মূল্যছাড়ে পাচ্ছেন আকর্ষনীয় সব ট্যাবলেট।
            </p> <br><br>
            <h2>অফারের পণ্যগুলো দেখতে নিচে স্ক্রল করুন &nbsp; ⬇️</h2>
        </div>
    </div>
</section>
<!-- laptop -->
<section class="featured-Category">
    <div class="categoryHeader">
        <h1>Ramadan Laptop Mega Deal</h1>
        <p>Get exciting discount on Graphics Card</p>
    </div>
    <div class="container">
        <div class="row">
            @foreach($laptopDeals as $deal)
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body font-weight-bold">
                        <p class="p-1 text-white rounded" style="background:#40739e;">
                            Save: {{ $deal['regular_price']-($deal['product_offer']/100) }} ৳
                        </p>
                        <a href="{{ route('website.deals.details',$deal->id) }}" style="color:black;">
                            <img src="{{ asset('uploads/products/'.$deal->product_image) }}" alt="" class="img-fluid"><br><br>
                            <p>Model: {{ $deal->model }}</p>
                            <span class="text-danger">Price: {{ $deal->regular_price }} ৳</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- tablet -->
<section class="featured-Product">
    <div class="productHeader">
        <h1>Ramadan Tablet Mega Deal</h1>
        <p>Get exciting discount on Tablets</p>
    </div>
    <div class="container">
        <div class="row">
            @foreach($tabletDeals as $deal)
            <div class="col-6 col-lg-3">
                <div class="card">
                    <div class="card-body font-weight-bold">
                        <!-- save money -->
                        <p class="p-1 text-white rounded" style="background:#40739e;">
                            Save: {{ $deal['regular_price']-($deal['product_offer']/100) }} ৳
                        </p>
                        <a href="{{ route('website.deals.details',$deal->id) }}" style="color:black;">
                            <img src="{{ asset('uploads/products/'.$deal->product_image) }}" alt="" class="img-fluid"><br><br>
                            <p>Model: {{ $deal->model }}</p>
                            <span class="text-danger">Price: {{ $deal->regular_price }} ৳</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Description -->

<section class="descripiton">
    <div class="container">
        <h4 class="p-1 mt-4">Leading Computer, Laptop & Gaming PC Retail & Online Shop in Bangladesh</h4>

        <article>Technology has become a part of our daily lives and for a huge portion of our life, we are dependent on tech products daily. There is hardly a home in Bangladesh without a tech product. This is where we come in. Star Tech & Engineering Ltd had started as a Tech product shop way back in March 2007. We focused on giving the customers the best service possible. This is why Star Tech is one of The most trusted names in the tech industry of Bangladesh today.</article>
    </div><br><br><br>
</section>
@endsection