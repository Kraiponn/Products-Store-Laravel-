@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">

            <div class="card">
                <div class="card-header">Project Details</div>
                <div class="card-body">
                    <a href="{{ url('projects/create') }}" class="btn btn-primary" style="margin-bottom:10px">Add Item</a>

                    @if (count($projects) > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ProjectName</th>
                                    <th>Customer</th>
                                    <th>Price</th>
                                    <th>ProductType</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->project_name }}</td>
                                        <td>{{ $item->customer }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->products->p_name }}</td>
                                        <td>
                                            <a href="{{ url('projects/'.$item->id.'/edit') }}" class="btn btn-success">
                                                <i class="fa fa-pencil fg-white" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('projects/delete/'.$item->id) }}" class="btn btn-danger">
                                                <i class="fa fa-trash-o fg-white" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $projects->render() }}

                    @else
                        <div class="alert alert-warning">
                            No data record on the system. Please add project to system
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('footer')
    @if (session()->has('status'))
        <script>
            var delay = alertify.get('notifier','delay');
            alertify.set('notifier','delay', 2);
            alertify.set('notifier','position', 'top-right');
            alertify.success('<?php echo session()->get('status'); ?>');
        </script>
    @endif
@endsection
