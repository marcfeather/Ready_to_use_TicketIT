@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="panel-body">
            @include('spoiler.basic')
            @include('spoiler.user')
        </div>
    </div>
</div>
@endsection




