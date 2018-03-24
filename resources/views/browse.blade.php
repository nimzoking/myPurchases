@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card text-white bg-info">
                <div class="card-header">Browse</div>

                <div class="panel-body text-dark bg-light">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="pager-top">{{ $purchases->links() }}</div>
                    <table id="browse" class="table table-striped table-bordered"> 
                        <thead> 
                            <tr> 
                                <th>ID</th> 
                                <th>Date</th> 
                                <th>Price</th> 
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr> 
                        </thead>
                        <tbody> 
                            @foreach ($purchases as $purchase) 
                            <tr> 
                                <td>{{ $purchase->id }}</td> 
                                <td>{{ $purchase->date }}</td> 
                                <td>{{ $purchase->price }}</td> 
                                <td>{{ $purchase->description }}</td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="/update/{{ $purchase->id }}">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <form method="POST" action="/delete">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $purchase->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                    </form>                                    
                                </td>
                            </tr>                            
                            @endforeach 
                        </tbody>
                    </table>
                    <div class="pager-btm">{{ $purchases->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection