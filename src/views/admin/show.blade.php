@extends('admin.index')
@section('previous')
<a type="submit" href="{{ route('admin.newsletter') }}" class="btn btn-sm btn-primary" target="_blank" title="Go back"><i class="fa fa-angle-left"></i> Go back</a>
            <h1>Subscriptors</h1>


@endsection
@section('maincontent')
 <form method="POST" action="{{ route('admin.newsletter.update', $subscriptor['id']) }}" accept-charset="UTF-8" enctype="multipart/form-data" role="form">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="control-label required">Subscriptor Name:</label>

                    <input type="text" id="name" class="form-control namefortrans" name="name" value="{{ old('name', $subscriptor['name']) }}" maxlength="255" required />

                    @include('snippets.errors_first', ['param' => 'name'])
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label required">Subscriptor email:</label>

                    <input type="text" id="email" class="form-control namefortrans" name="email" value="{{ old('email', $subscriptor['email']) }}" maxlength="255" required />

                    @include('snippets.errors_first', ['param' => 'name'])
                </div>

        
                <div class="form-group">
                    <button type="submit" class="btn btn-success" title="Update this subscriptor"><i class="fa fa-save"></i> Save</button>

                    <a href="{{ route('admin.newsletter') }}" class="btn" title="Click here to cancel">Cancel</a>
                </div>


            </form>


@endsection