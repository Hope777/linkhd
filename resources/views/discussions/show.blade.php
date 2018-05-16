@extends('layouts.app')

@section('content')
 <div class="card">
        <div class="card-header">

            <img src="{{ $d->user->avatar }}" alt="avatar" width="35px" height="35px">&nbsp;&nbsp;&nbsp;

            <span>{{ $d->user->name }}&nbsp;| {{ $d->created_at->diffForHumans() }}</span>

            @if($d->is_being_watched_by_auth_user())

                 <a href="{{ route('discussion.unwatch', ['id' => $d->id ]) }}" class="btn btn-primary btn-sm float-right">Unwatch</a>

            @else

                <a href="{{ route('discussion.watch', ['id' => $d->id ]) }}" class="btn btn-outline-success btn-sm float-right">Watch</a>

            @endif

        </div>


        <div class="card-body">


            <h4 class="text-center"> 

               <b> {{ $d->title }} </b>

            </h4>

                <hr>

                   <p class="text-center"> 

                        {{ $d->content }}

                   </p>



        </div>
            
            <div class="card-footer text-muted">


                <p>
                        {{ $d->replies->count() }} Replies
                </p>


                <a href="{{ route('channel', ['slug' =>  $d->channel->slug]) }}" class="btn btn-secondary btn-sm float-right">Channel | {{ $d->channel->title  }}</a>

            </div>



    </div>

@foreach($d->replies as $r)

    <div class="card">
        <div class="card-header">

            <img src="{{ $r->user->avatar }}" alt="avatar" width="35px" height="35px">&nbsp;&nbsp;&nbsp;

            <span>{{ $r->user->name }}&nbsp;| {{ $r->created_at->diffForHumans() }}</span>



        </div>


        <div class="card-body">



                   <p class="text-center"> 

                        {{ $r->content }}

                   </p>



        </div>
            
            <div class="card-footer text-muted">

               @if($r->is_liked_by_auth_user())
                    <a href="{{ route('reply.unlike',['id' => $r->id ]) }}" class="btn btn-danger">Unlike <span class="badge badge-light">{{ $r->likes->count() }}</span></a>
               @else
                    <a href="{{ route('reply.like',['id' => $r->id ]) }}" class="btn btn-primary">Like <span class="badge badge-light">{{ $r->likes->count() }}</span></a>

               @endif   

            </div>



    </div>

@endforeach


 <div class="card">
    <div class="card-body">

@if(Auth::check())

        <form action="{{ route('discussion.reply', ['id' => $d->id ]) }}" method="post">

                {{ csrf_field() }}

            <div class="form-group">

                <label for="reply">Leave A Reply::</label>

                <textarea name="reply" id="reply" cols="10" rows="30" class="form-control"></textarea>

            </div>

             <div class="form-group">

        <button class="btn btn-success pull-right">Leave A Reply</button>

            </div>

        </form>    

 @else

                    <div class="text-center">
                        <h2>Sign in to leave a reply</h2>
                    </div>
@endif

    </div>
</div>


@endsection
