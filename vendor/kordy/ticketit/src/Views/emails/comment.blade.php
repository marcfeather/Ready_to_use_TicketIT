<?php $comment = unserialize($comment);?>
<?php $ticket = unserialize($ticket);?>

@extends($email)

@section('subject')
	{{ trans('ticketit::email/globals.comment') }}
@stop

@section('link')
	<strong>
	<a style="color:#15c;text-decoration:none;" href="{{ route($setting->grab('main_route').'.show', $ticket->id) }}">
		{{ trans('ticketit::email/globals.view-ticket') }}
	</a>
	</strong>
@stop

@section('content')
	{!! trans('ticketit::email/comment.data', [
	    'name'      =>  $comment->user->name,
	    'subject'   =>  $ticket->subject,
	    'status'    =>  $ticket->status->name,
	    'category'  =>  $ticket->category->name,
	    'comment'   =>  $comment->getShortContent()
	]) !!}
@stop
