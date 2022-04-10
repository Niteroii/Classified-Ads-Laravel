@extends('backend.layouts.master')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="main-panel">
        <div class="content-wrapper">
            @include('backend.inc.message')
            <h4>Manage Category</h4>
            <div class="row justify-content-center">


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">


                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($categories as $category)
                                            <tr>
                                            
                                               <td><img src="{{ Storage::url($category->image) }}"></td>
                                           
                                             
                                              
                
                                            
                                             
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <a href="{{ route('category.edit', [$category->id]) }}"><button
                                                            class="btn btn-info">
                                                            <i class="mdi mdi-table-edit"></i>
                                                        </button>
                                                    </a>

                                                </td>
                                                <td>
                                                       
                                                          <!-- Button trigger modal -->
                                                
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $category->id }}">
                                                    <i class="mdi mdi-delete"></i>
                                                        </button>        

                                                      

                                                                          <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                <form action="{{ route('category.destroy', $category->id) }}"
                                                                method="post">@csrf
                                                                @method('DELETE')
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Delete
                                                                            confirmation</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body"> <p> Are you sure you want to delete this item ?</p></div>
                                                                    <div class="modal-footer">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-success btn-sm active"
                                                                            data-dismiss="modal">Cancel</button>
                                                                        <button type="submit"
                                                                        class="btn btn-success btn-sm active">Yes Delete it</button>
                                                                    </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                         </div>

                                                        </td>


                                                    </tr>
                                        @empty
                                            <td>No category to display</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @endsection
