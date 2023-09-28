@extends('dash.master')

@section('title')
    Dashboard
@endsection

<link rel="stylesheet" href="{{ asset('assets/css/stylee.css') }}">

@section('content')
    <div class="content col col-lg-6">
        <div class="main">
            <section class="signup">
                <div class="container" style="margin:auto">
                    <div class="signup-content">
                        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data"
                            id="signup-form" class="signup-form">
                            @csrf
                            <h2 class="form-title mb-4"
                                style="color: black; text-align: center; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                                Add Product</h2>
                            <div class="form-group">
                                <input type="text" class="form-input" name="product_name" id="product_name"
                                    placeholder="Product Name" />
                                {{-- <span style="color:red">
                                    @error('product_name')
                                        {{ $message }}
                                    @enderror
                                </span><br><br> --}}
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="product_description" id="product_description"
                                    placeholder="Product Description" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="product_price" id="product_price"
                                    placeholder="Product Price" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="product_quantity" id="product_quantity"
                                    placeholder="Product Quantity" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="product_status" id="product_status"
                                    placeholder="Product Status" />
                            </div>
                     
                            <div>
                                <select name="categories" id="categories">
                                    @foreach ($categories as $item)
                                   
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                     
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-group mt-4">
                                <input name="product_image" type="file" class="form-control white-input"
                                    id="product_image">
                                <span style="color:red">
                                    @error('product_image')
                                        {{ $message }}
                                    @enderror
                                </span><br><br>
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Add"
                                    style="color: black;" />
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
