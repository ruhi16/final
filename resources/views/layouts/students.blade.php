@extends('layouts.baselayout')
@section('title','Students Details')

@section('header')
	@include('layouts.navbar')
@endsection

@section('content')
<h1>Student's Page</h1>

      <table class="table table-bordered">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
            </tr>
            <tr>
              <td>Mary</td>
              <td>Moe</td>
              <td>mary@example.com</td>
            </tr>
            <tr>
              <td>July</td>
              <td>Dooley</td>
              <td>july@example.com</td>
            </tr>
          </tbody>
        </table>

@endsection


@section('footer')
	@include('layouts.footer')
@endsection
