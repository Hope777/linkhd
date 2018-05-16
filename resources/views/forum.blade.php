@extends('layouts.app')

@section('content')
    
        @foreach($discussions as $d)


    <div class="card">
        <div class="card-header">

            <img src="{{ $d->user->avatar }}" alt="avatar" width="35px" height="35px">&nbsp;&nbsp;&nbsp;

            <span>{{ $d->user->name }}&nbsp;| {{ $d->created_at->diffForHumans() }}</span>

            <a href="{{ route('discussion', ['slug' => $d->slug]) }}" class="btn btn-primary btn-sm float-right">View</a>

        </div>


        <div class="card-body">


            <h4 class="text-center"> 

               <b> {{ $d->title }} </b>

            </h4>

                   <p class="text-center"> 

                        {{ str_limit($d->content, 50) }}

                   </p>



        </div>
            
            <div class="card-footer text-muted">

                <p>
                        {{ $d->replies->count() }} Replies
                </p>


                <a href="{{ route('channel', ['slug' =>  $d->channel->slug]) }}" class="btn btn-secondary btn-sm float-right">Channel | {{ $d->channel->title  }}</a>


            </div>

    </div>


        @endforeach


<div class="text-center">
    
    {{  $discussions->links()  }}

</div>


@endsection
