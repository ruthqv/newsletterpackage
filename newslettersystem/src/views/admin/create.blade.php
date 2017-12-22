@extends('admin.index')
@section('previous')
<a type="submit" href="{{ route('admin.newsletter') }}" class="btn btn-sm btn-primary" target="_blank" title="Go back"><i class="fa fa-angle-left"></i> Go back</a>
            <h2>Create new Subscriptor</h2>

@endsection
@section('maincontent')
<form method="POST" action="{{ route('newsletter') }}" accept-charset="UTF-8" enctype="multipart/form-data" role="form">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-12 col-md-6">


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label required">Subscriptor Name:</label>

                            <input type="text" id="name" class="form-control namefortrans" name="name" value="{{ old('name') }}" maxlength="255" required />

                            @include('snippets.errors_first', ['param' => 'name'])
                        </div>
                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label required">Subscriptor Email:</label>

                            <input type="text" id="email" class="form-control namefortrans" name="email" value="{{ old('email') }}" maxlength="255" required />

                            @include('snippets.errors_first', ['param' => 'email'])
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success" title="Create this new product"><i class="fa fa-save"></i> Submit</button>

                            <a href="{{ route('admin.newsletter') }}" title="Click here to cancel">Cancel</a>
                        </div>


                    </div>
                </div>

            </form>


@endsection