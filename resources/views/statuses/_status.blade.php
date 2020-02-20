<li class="media mt-4 mb-4">
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" srcset="" class="mr-3 gravatar" />
    </a>

    <div class="media-body">
        <h5 class="mt-0 mb-1">
            {{ $user->name }} <small></small> / {{ $status->created_at->diffForHumans() }}
        </h5>
        {{ $status->content }}
    </div>

    @can('delete', $status)
        <form action="{{ route('statuses.destroy', $status) }}" method="post" onsubmit="return confirm('确认要删除这条微博吗？');">
            @csrf
            {{ method_field('delete') }}
            <button type="submit" class="btn btn-sm btn-danger">删除</button>
        </form>
    @endcan
</li>
