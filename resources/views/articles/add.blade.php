@extends('layouts/app');
@section('content')
<div class="container">
    @if($errors->any())
    <div class="alert alert-warning">
        <ol>
            @foreach($errors->all() as $errors)
                <li>{{ $errors }}</li>
            @endforeach
        </ol>
    </div>
    @endif
    <form method="post">
        @csrf
     <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control">
     </div>
     <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="body" class="form-control"></textarea>
     </div>
     <div class="form-group">
        <label for="category">Category</label>
        <select name="category_id"  class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category['id'] }}"> {{$category['name']}} </option>
            @endforeach
        </select>
     </div>
     <input type="submit" value="Add Article" class="btn btn-primary">
    </form>
</div>
@endsection