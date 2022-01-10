@extends('template_backend.home')
@section('sub-judul','Edit Post')
@section('content')

@if(count($errors)>0)
    @foreach($errors->all() as $errors)
    <div class="alert alert-danger" role="alert">
        {{ $errors}}
    </div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
    {{ Session('success')}}
    </div>

@endif

<form action="{{ route('posts.update', $posts->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul" value="{{ $posts->judul}}">
    </div>

    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="category_id">
            <option value="" holder>Pilih Kategori</option>
            @foreach($category as $result)
                <option value="{{ $result->id }}"
                    @if( $posts->category_id == $result->id)
                        selected
                    @endif
                >{{ $result -> name }}</option>
            @endforeach    
        </select>
    </div>

    
    <div class="form-group">
        <label>Pilih Tags</label>
            <select class="form-control select2" multiple="" name="tags[]">
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}"
                        @foreach($posts-> tags as $value)
                            @if( $tag->id == $value->id)
                                selected
                            @endif
                        @endforeach
                    >{{ ($tag->name) }}</option>
                @endforeach  
            </select>
     </div>

    <div class="form-group">
        <label>Konten</label>
        <textarea class="form-control" name="content">{{$posts->content}}</textarea>
    </div>

    <div class="form-group">
        <label>Thumbnail</label>
        <input class="form-control" type="file" name="gambar">
    </div>

    <div class="form-group">
        <button class="btn btn-primary ">Simpan Post</button>
    </div>


</form>



@endsection