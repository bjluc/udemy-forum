@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Create a new discussion</div>

                <div class="panel-body">
                   <form action="{{ route('discussions.store') }}" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    </div>

                    
                    <div class="form-group">
                        <label for="channel">Pick a channel</label>
                        <select name="channel_id" id="channel_id" class="form-control">
                        <option value="">--channel--</option>
                            @foreach($channels as $channel)

                                <option value="{{ $channel->id }}">{{ $channel->title }}</option>

                            @endforeach
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="content">Ask a Question</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ old('content') }}</textarea>
                    </div
                    <div class="form-group">
                        <button class="btn btn-success btn-lg pull-right" type="submit">Create a discussion</button>
                    </div> 
                   </form>
                </div>
            </div>

@endsection

