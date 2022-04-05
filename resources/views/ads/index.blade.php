@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                @include('sidebar')
            </div>
            <div class="col-md-9">
                @include('backend.inc.message')
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Staus</th>
                            <th scope="col">Edit</th>
                            <th scope="col">View</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($ads as $key =>$ad)
                            <tr>

                                <th scope="row">{{ $key + 1 }}</th>

                                <td style="width: 200px;height:130px;">
                                <div id="carouselExampleSlidesOnly{{$ad->id}}" class="carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-inner">
                                  <div class="carousel-item active">
                                  <img src="{{ Storage::url($ad->feature_image) }}" class="d-block w-100" alt="...">
                                </div>
                                  <div class="carousel-item">
                                  <img src="{{ Storage::url($ad->first_image) }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="{{ Storage::url($ad->second_image) }}" class="d-block w-100" alt="...">
                                </div>
                               </div>
                              </div>

                                </td>
                                <td></td>
                                <td style="color: purple;">KSH {{ $ad->price }}</td>
                                <td>
                                    @if ($ad->published == 1)
                                        <span class="badge rounded-pill bg-success">Published</span>
                                    @else
                                        <span class="badge rounded-pill bg-info text-dark">Pending</span>
                                    @endif
                                </td>

                                <td>

                                    <a href="{{ route('ads.edit', [$ad->id]) }}"> <button
                                            class="btn btn-primary">Edit</button></a>

                                </td>

                                <td>
                                <a target="_blank" href="{{route('product.view',[$ad->id,$ad->slug])}}">
                             
                                     <button class="btn btn-info">View</button>
                                    </a>
                                
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#exampleModal{{$ad->id}}">
                                        Delete
                                    </button>
                                

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$ad->id}}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                    <form action="{{route('ads.destroy',$ad->id )}}" method="post">@csrf
                                      @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this item?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Yes, Delete it</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </td>
                            </tr>
                        @empty
                            <td>You have no any ads</td>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
<style>
        .vertical-menu a {
            background-color: #fff;
            color: #000;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: purple;
            color: #fff;
        }

    </style>