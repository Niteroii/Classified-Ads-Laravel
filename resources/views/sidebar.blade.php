<div class="card">

    <div class="card-body ">
        @if(!auth()->user()->avatar)
            <img class="mx-auto d-block img-thumbnail" src="/img/man.jpg" width="130">
            
        @else
            <img src="{{Storage::url(auth()->user()->avatar)}}" style="width:100%;">
        @endif
       
       
    <p class="text-center"><b>{{auth()->user()->name}}</b></p>
    </div>
    <hr style="border:2px solid blue;">
    <div class="vertical-menu">
    <i class="fas fa-tachometer-alt-slowest"></i> <a href="#"><i class="fas fa-tasks"></i> Dashboard</a>
    <a href="{{route('profile')}}" class="{{request()->is('profile')?'active':''}}"><i class="fas fa-user"></i> Profiles</a>
    <a href="{{route('ads.create')}}" class="{{request()->is('ads/create')?'active':''}}"><i class="fas fa-cloud-upload-alt"></i> Create ads</a>
    <a href="{{route('ads.index')}}" class="{{request()->is('ads')?'active':''}}"><i class="fas fa-images"></i> Published ads</a>
    <a href="{{route('pending.ad')}}" class="{{request()->is('ad-pending')?'active':''}}"><i class="fas fa-ban"></i> Pending ads</a>
    <a href="{{route('saved.ad')}}" class="{{request()->is('saved-ads')?'active':''}}"><i class="fas fa-heart"></i> Saved ads</a>

    <a href="{{route('messages')}}" class="{{request()->is('messages')?'active':''}}"><i class="fas fa-envelope"></i> Message</a>
    </div>

</div>

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