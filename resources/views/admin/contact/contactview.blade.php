@section('contact')
active
@endsection
@section('title')
   deshboard | Contact
@endsection
@extends('layouts.dashboard_app')
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item " href="{{ url('home') }}">Home</a>
      <a class="breadcrumb-item " href="{{ route('contact.message') }}">contact message</a>
      <a class="breadcrumb-item active">Message view</a>
      {{-- <span class="breadcrumb-item active">Blank Page</span> --}}
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Contact Messages </h5>
      </div><!-- sl-page-title -->
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                <table class="table table-bordered" id="product_table">
                    <thead class="bg-prima">
                      <th> All View Messages</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <strong>Name : </strong> {{ $contactmessage->name }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Email : </strong> {{ $contactmessage->email }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Subject : </strong> {{ $contactmessage->subject }}</td>
                      </tr>
                      <tr>
                        <td> <strong>Messages : </strong> {{ $contactmessage->message }}</td>
                      </tr>
                    </tbody>
                  </table>

              </div>
          </div>
      </div>
    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->
@endsection
