@extends('admin.master')
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="well">

                @if(Session::get('message'))
                    <h2 style="text-align: center;color: blue;font-weight: 700;">{{ Session::get('message') }}</h2>
                @else
                    <h2 style="text-align: center;color: blue;font-weight: 700;">ADD NEWS </h2>
                @endif

                <form action="{{ url('/new-news') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label class="col-sm-3">News Title</label>
                        <div class="col-sm-9">
                            <input required type="text" name="news_title" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('news_title') ? $errors->first('news_title') : ' ' }}</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">News Big Image</label>
                        <div class="col-sm-9">
                            <input required type="file" name="author_image" accept="image/*">
                            <span style="color: red;">{{ $errors->has('author-image') ? $errors->first('author-image') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">News Image</label>
                        <div class="col-sm-9">
                            <input required type="file" name="news_image" accept="image/*">
                            <span style="color: red;">{{ $errors->has('news_image') ? $errors->first('news_image') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">News Description</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control textarea" rows="15" name="news_description"></textarea>
                            <span style="color: red;">{{ $errors->has('news_description') ? $errors->first('news_description') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Author Name</label>
                        <div class="col-sm-9">
                            <input required type="text" name="author_name" class="form-control"/>
                            <span style="color: red;">{{ $errors->has('author_name') ? $errors->first('author_name') : ' ' }}</span>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3">Author Description</label>
                        <div class="col-sm-9">
                            <textarea required class="form-control textarea" rows="15" name="author_description"></textarea>
                            <span style="color: red;">{{ $errors->has('author_description') ? $errors->first('author_description') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3">Publication Status</label>
                        <div class="col-sm-9">
                            <select required name="publication_status" class="form-control">
                                <option value="">---Select Publication Status---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save News Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection