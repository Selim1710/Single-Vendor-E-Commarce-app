@extends('website.master')
@section('contents')
<!-- featured product -->

<section class="featured-Product">
    <div class="productHeader">
        <h1> Offer Details</h1>
    </div>
    <div class="container">
        <div class="head">
            <p>offer ends in: </p>
            <div class="time">
                <p>Days: Hour Minute Seconds</p>
            </div>
        </div>
        <div class="offer-details">
            <img src="{{ asset('website/images/offer-1.jpg') }}" alt="" class="img-fluid"><br><br>
            <p>
                পবিত্র রমজান মাস উপলক্ষে স্টার টেক উত্তরা সোনারগাঁ জনপথ শাখা থেকে ল্যাপটপ বা ডেস্কটপ কিনলেই নিশ্চিত উপহার হিসেবে পাচ্ছেন ৬৫০ টাকা সমমূল্যের শপিং ভাউচার এবং টি-শার্ট সহ আকর্ষনীয় নিশ্চিত উপহার।

                এছাড়াও যে কোন পণ্য কিনলেই সাথে থাকছে একটি লাকি কুপন যেখানে ১ম পুরষ্কার হিসেবে থাকছে ল্যাপটপ, ২য় পুরষ্কার হিসেবে থাকছে একটি মনিটর এবং ৩য় পুরষ্কার হিসেবে থাকছে একটি ২ঃ১ স্পিকার।

                *ঈদের আগের রাতে র‍্যাফেল ড্রে এর মাধ্যমে ভাগ্যবান বিজয়ীদের নাম ঘোষনা করা হবে।

            </p>
            <span class="text-secondary">
                শর্তাবলীঃ

                ক্রেতাগন এই অফারটি শুধুমাত্র স্টার টেক উত্তরা সোনারগাঁ জনপথ শাখা থেকে উপভোগ করতে পারবেন।
                অফারটি ৩ এপ্রিল - ১৩ই এপ্রিল পর্যন্ত কার্যকর থাকবে।
            </span>
        </div>


    </div>
</section>
@endsection