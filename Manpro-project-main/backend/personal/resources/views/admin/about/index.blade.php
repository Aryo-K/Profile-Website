@extends('admin.layouts.app')

@section('content')

<style>
  .ellipsis{
      overflow-x: hidden; 
      white-space: normal; 
      text-overflow: ellipsis; 
      display:-webkit-box;
      -webkit-line-clamp: 5;
      -webkit-box-orient: vertical;
    }
</style>

<!-- Table head options start -->
<div class="row" id="table-head">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        @if(!$hasData)
        <h4 class="card-title"><a class="btn btn-primary" href="{{ route('admin.about.create') }}" role="button">Buat baru</a></h4>
        @else
        @endif
        @if(session('success.up'))
          <div class="alert alert-success">
            {!! session('success.up') !!}
          </div>
        @endif
        @if(session('success.down'))
            <div class="alert alert-danger">
                {!! session('success.down') !!}
            </div>
        @endif
      </div>
      <div class="card-content">
        <!-- <div class="card-body">
          <p>Similar to tables and dark tables, use the modifier classes <code
              class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to
            make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>
        </div> -->
        <!-- table head dark -->
        <div class="table-responsive">
          <table class="table mb-0">
            <thead class="thead-dark">
              <tr>
                <th>Desc</th>
                <th>Birthday</th>
                <th>Website</th>
                <th>Phone</th>
                <th>City</th>
                <th>Age</th>
                <th>degree</th>
                <th>email</th>
                <th>work</th>
                <th>photo</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @forelse($about as $a)  
              <tr>
                <td class="text-bold-500">{{ $a->desc }}</td>
                <td>{{ $a->birthday }}</td>
                <td>{{ $a->website }}</td>
                <td>{{ $a->phone }}</td>
                <td>{{ $a->city }}</td>
                <td>{{ $a->age }}</td>
                <td>{{ $a->degree }}</td>
                <td>{{ $a->email }}</td>
                <td>{{ $a->work }}</td>
                <td><img src="/pictabouts/{{ $a->photo }}" style="width:200px;" alt=""></td>
                <td>
                    <div class="d-flex">
					  <a href="{{ route('admin.about.edit', $a->id) }}" class="btn btn-warning btn-sm mx-2"><i class="fa fa-edit"></i></a>
						<form action="{{ route('admin.about.hapus', $a->id) }}" method="POST">
							@csrf
		      				
						</form>
				    </div>
                </td>
              </tr>
            @empty
            @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Table head options end -->
@endsection