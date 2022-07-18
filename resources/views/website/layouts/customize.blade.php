@extends('website.master')

@section('contents')
    <div id="invoice">
        <div class="toolbar hidden-print">
            <div class="text-right">
                <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
                <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
            </div>
            <hr>
        </div>
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <main>
                    <div class="row contacts">
                        <div class="col invoice-to">
                            <div class="text-gray-light">
                                <h2>Build your own PC- Zoom Computer</h2>
                            </div>
                            <h4 class="to">Md. Selim hossain suhag</h4>
                            <div class="address">Address</div>
                            <div class="email"><a href="#">exapmple@example.com</a></div>
                        </div>
                        <div class="col invoice-details">
                            <h3 class="invoice-id">Total Amount: 0000 TK</h3>
                            <div class="date">Total items: 000</div>
                        </div>
                    </div>
                    {{-- form --}}
                    <form action="{{ route('user.order.customize.product') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <table border="0" class="text-center" cellspacing="0" cellpadding="0">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th></th>
                                    <th></th>
                                    <th>Select</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="no">
                                            <img src="{{ asset('/uploads/customization/category/'.$category->image) }}" alt="image">
                                        </td>
                                        <td>{{ $category->customize_category_name }}</td>
                                        <td></td>
                                        <td></td>
                                        <td class="total"><a href="#" class="btn btn-info">Choose</a></td>
                                    </tr>
                                @endforeach

                                {{-- after choose product --}}
                                {{-- here will be loop --}}
                                <tr>
                                    <td><input type="image" name="image" alt="image" disabled></td>
                                    <td><input type="text" name="name" disabled></td>
                                    <td></td>
                                    <td></td>
                                    <td><input type="number" name="price" disabled></td>
                                </tr>
                                {{-- endloop --}}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">
                                        <button type="submit" class="btn btn-info w-100">Order Now</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2"></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>

                    <br>
                    <div class="thanks">Thank you!</div>
                    <div class="notices">
                        <div>NOTICE:</div>
                        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                    </div>
                </main>
                <footer>
                    Invoice was created on a computer and is valid without the signature and seal.
                </footer>
            </div>
            <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
            <div></div>
        </div>
    </div>
@endsection
