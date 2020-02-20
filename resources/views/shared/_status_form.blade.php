<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    @csrf

    <textarea name="content" id="content" class="form-control"  rows="3">{{ old('content') }}</textarea>

    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
</form>
