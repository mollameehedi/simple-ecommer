
@extends('layouts.dashboard_app')
@section('contact')
active
@endsection
@section('title')
    Contact Message
@endsection
@section('dashboard_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('home') }}">Home</a>
      <span class="breadcrumb-item active">Product</span>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        list contactmessage(active)
                    </div>
                    <div class="card-body">
                        @if (session('message_status'))
                            <div class="alert alert-danger">
                                {{ session('message_status') }}
                            </div>
                        @endif
                           <div class="table-responsive">
                            <table class="table table-border" id="contactmessage_table">
                                <thead>
                                  <tr>
                                    <th>Serial NO.</th>
                                    <th>visitor Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @forelse ($contactmessages as $contactmessage)
                                    <tr>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ $contactmessage->name }}</td>
                                        <td>{{ $contactmessage->email }}</td>
                                        <td>{{ $contactmessage->subject }}</td>

                                        <td>
                                           <a href="{{ route('contact.messages.delete',$contactmessage->id) }}" type="button" class="btn btn-danger">Delete</a>
                                           <a href="{{ route('contact.messages.view',$contactmessage->id) }}" type="button" class="btn btn-primary">View</a>
                                        </td>
                                      </tr>
                                      @empty
                                      <tr>
                                          <td colspan="50" class="text-center text-danger">no data available</td>
                                      </tr>
                                    @endforelse
                                </tbody>
                              </table>
                              {{ $contactmessages->links() }}
                           </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#product_table').DataTable();
        })
    </script>
@endsection


