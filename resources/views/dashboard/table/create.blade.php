@extends ('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="h2">Create New</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dasboard/table">
        @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="amount" class="form-label">Amount</label>
    <input type="amount" class="form-control" id="amount" name="amount">
  <div class="mb-3">
    <label for="transaction_type" class="form-label">Transaction Type</label>
    <input type="text" class="form-control" id="transaction_type" name="transaction_type">
    <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input type="text" class="form-control" id="category" name="category">
    <div class="mb-3">
    <label for="account_name" class="form-label">Account Name</label>
    <input type="text" class="form-control" id="account_name" name="account_name">
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script>
    con
</script>

@endsection