@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <livewire:conversations.conversation-list :conversations="$conversations" />
            </div>
            <div class="col-md-8">

            </div>
        </div>
    </div>
@endsection
