<div>
    @foreach($messages as $message)
        <div>
            {{ $message->body }} <br> <span>
                Posted by: {{ $message->user->present()->name }}
            </span>
        </div>
    @endforeach
</div>
