@extends('layouts.dashboard.main2')

@section('power')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Question</h1>
    </div>

<div class="col-lg-8">
    <form method="post" href="/questions/questions" >
        @csrf
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select class="form-select" name="level_id" >
                    <option selected>Open this select menu</option>
                    @foreach($levels as $level)
                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="question" class="form-label">Question</label>
                <input type="text" class="form-control" id="question">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Create Question</button>
    </form>
</div>
 <script>
document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
})
</script>
@endsection