@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
               @include('sidebar')
            </div>
            <div class="col-md-9">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>

                        </button>
                        @foreach ($errors->all() as $errorMessage)
                            <li>{{ $errorMessage }}</li>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('ads.update',$ad->id) }}" method="post" enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header text-white" style="background-color: red">
                            Update your ad.
                        </div>
                        <div class="card-body">
                            <label for="file" class="mt-2"><mark>Upload  Images</b</label>
                            <div class="form-inline form-group mt-1">

                                <div class="col-md-4">
                                    <input type="file" class="" name="feature_image">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="" name="first_image">
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="" name="second_image">
                                </div>

                            </div>
                            <label for="file" class="mt-2"><b>Choose category</b></label>
                            <div class="form-inline form-group mt-1">
                          
                                <div class="col-md-4">
                                    <select class="form-control" name="category_id">
                                        <option value=""> choose category</option>
                                        @foreach(App\Models\Category::all() as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="subcategory_id">
                                        <option value="">choose subcategory</option>
                                        @foreach(App\Models\Subcategory::all() as $Subcategory)
                                        <option value="{{$Subcategory->id}}">{{$Subcategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="childcategory_id">
                                        <option value="">choose childcategory</option>
                                        @foreach(App\Models\Childcategory::all() as $Childcategory)
                                        <option value="{{$Childcategory->id}}">{{$Childcategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$ad->name}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                            <textarea name="description" id="mytextarea" class="form-control">{{$ad->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">Price(KSH)</label>
                            <input type="text" name="price" class="form-control" value="{{$ad->price}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Price staus</label>
                                <select class="form-control" name="price_status">
                                    <option value="negoitable" {{$ad->price_status=="negoitable"?'selected':''}}>Negotiable</option>
                                    <option value="fixed" {{$ad->price_status=="fixed"?'selected':''}}>Fixed</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Product Condition</label>
                                <select class="form-control" name="product_condition">
                                    <option value="">Select </option>
                                    <option value="likenew" {{$ad->product_condition=="likenew"?'selected':''}}>Looks like New</option>
                                    <option value="heavilyused" {{$ad->product_condition=="heavilyused"?'selected':''}}>Heavily Used</option>
                                    <option value="new" {{$ad->product_condition=="new"?'selected':''}}>New</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Listing Location</label>
                            <input type="text" class="form-control" name="listing_location" value="{{$ad->listing_location}}">
                            </div>
                            <label for="file" class="mt-2"><b>Choose address</b></label>
                            <div class="form-inline form-group mt-1">

                                <country-dropdown />
                            </div>
                            <div class="form-group">
                                <label for="location">Seller contact number</label>
                            <input type="number" class="form-control" name="phone_number" value="{{$ad->phone_number}}">
                            </div>
                            <div class="form-group">
                                <label for="location">Demo link of product(ie:youtube)</label>
                            <input type="text" class="form-control" name="link" value="{{$ad->link}}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger float-right" type="submit">Update ad</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
