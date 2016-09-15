@extends('layouts.app')

@section('content')
@include('ticketit::shared.header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{ trans('ticketit::admin.user-index-title') }}
            {!! link_to_route('passwordReset', trans('ticketit::lang.user-forget-password') , null, ['class' => 'btn btn-primary pull-right'])!!}
            {!! link_to_route('register', trans('ticketit::lang.create-new-user') , null, ['class' => 'btn btn-primary pull-right margin-right-button'])!!}
            </h2>
        </div>


            <div id="message"></div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>{{ trans('ticketit::admin.table-id') }}</td>
                        <td>{{ trans('ticketit::admin.table-name') }}</td>
                        <td>{{ trans('ticketit::admin.table-email') }}</td>
                        <td>{{ trans('ticketit::admin.table-isadministrator') }}</td>
                        <td>{{ trans('ticketit::admin.table-isagent') }}</td>
                        <td>{{ trans('ticketit::admin.table-created_at') }}</td>
                        <td>{{ trans('ticketit::admin.table-updated_at') }}</td>
                        <td>{{ trans('ticketit::admin.table-remove-user') }}</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            {{ $user->ticketit_admin }}
                        </td>
                        <td>
                            {{ $user->ticketit_agent }}
                        </td>
                        <td>
                            {{ $user->created_at }}
                        </td>
                        <td>
                            {{ $user->updated_at }}
                        </td>
                        <td>
                            {!! CollectiveForm::open([
                            'method' => 'DELETE',
                            'action' => ['UserController@destroy', $user->id],
                            ]) !!}
                            {!! CollectiveForm::submit(trans('ticketit::admin.btn-remove'), ['class' => 'btn btn-danger']) !!}
                            {!! CollectiveForm::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

    </div>
@stop
