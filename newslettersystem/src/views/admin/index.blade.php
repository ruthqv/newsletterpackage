@extends('admin.index')
@section('previous')
<a type="submit" href="{{ route('admin.newsletter') }}" class="btn btn-sm btn-primary" target="_blank" title="Go back"><i class="fa fa-angle-left"></i> GO BACK</a>
            <h1>Subscriptors</h1>


@endsection
@section('maincontent')


        <div class="col-md-12">
   <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">User</th>
                        <th class="text-center">Lang</th>

                    </tr>
                    @foreach ($subscriptors as $subscriptor)
                        <tr>

                            <td class="text-right">{{ $subscriptor['name'] }}</td>
                             
                              <td class="text-right">{{ $subscriptor['email'] }}</td>

                           


            
                            <td class="text-center"><a href="{{ route('admin.newsletter.show', $subscriptor['id']) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
                            <td class="text-center">
                                <form method="POST" action="{{ route('admin.newsletter.destroy', $subscriptor['id']) }}" accept-charset="UTF-8" role="form" onsubmit="return confirm('Do you really want to remove this subscriptor?');">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>



        </div>

        <div class="col-md-12">
            <a href="{{ route('admin.newsletter.create') }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add new Subscriptor</a><br /><br />
            <a href="{{ route('admin.excel.index', ['newsletter'=>true]) }}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Export Datas</a><br /><br />


        </div>


@endsection