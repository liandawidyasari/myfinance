@extends ('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Finance</h1>
        </div>

<div class="table-responsive">
  <a href="/dashboard/table/create" class="btn btn-primary mb-3">Create New</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Date</th>
              <th scope="col">Description</th>
              <th scope="col">Amount</th>
              <th scope="col">Transaction Type</th>
              <th scope="col">Category</th>
              <th scope="col">Account Name</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post )
            <tr>
              <td>{{ $loop-> iteration }}</td>
              <td>{{ $post-> title }}</td>
              <td>{{ $post-> amount }}</td>
              <td>{{ $post-> transaction_type }}</td>
              <td>{{ $post-> category }}</td>
              <td>{{ $post-> account_name }}</td>
              <td> 
                <a href="/dasboard/table/{{ $post }}" class="badge bg-warning"><span data-feather="edit"></span></a> 
                <form action="/dashboard/table" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin nih mau di ilangin?')"><span data-feather="x-circle"></span></button>
                </form>
                 
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>

      </div>
@endsection