<div>
    @if ($conversations->count())
        @foreach($conversations as $conversation)
            <a href="{{ route('conversations.show', $conversation) }}" class="d-block bg-white p-4 mb-2">
                <div class="font-weight-bold text-muted">
                   @foreach($conversation->users as $user)
                       {{ $user->present()->name() }} @if ($conversation->users->last() !== $user) , @endif
                    @endforeach
                </div>
                <p class="text-muted mb-0 text-truncate d-flex align-items-center">
                    <span>This is the msg body</span>
                </p>
            </a>
        @endforeach
    @else
        <p>No conversations yet...</p>
    @endif
</div>
