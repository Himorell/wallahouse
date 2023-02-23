@extends('layouts.app')

@section('template_title')
    House
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Price</th>
										<th>Title</th>
										<th>Category</th>
										<th>Rooms</th>
										<th>Baths</th>
										<th>Persons</th>
										<th>Population</th>
										<th>Province</th>
										<th>Description</th>
										<th>Preferences</th>
										<th>Nameproperty</th>
										<th>Phone</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($houses as $house)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $house->price }}</td>
											<td>{{ $house->title }}</td>
											<td>{{ $house->category }}</td>
											<td>{{ $house->rooms }}</td>
											<td>{{ $house->baths }}</td>
											<td>{{ $house->persons }}</td>
											<td>{{ $house->population }}</td>
											<td>{{ $house->province }}</td>
											<td>{{ $house->description }}</td>
											<td>{{ $house->preferences }}</td>
											<td>{{ $house->nameProperty }}</td>
											<td>{{ $house->phone }}</td>

                                            <td>
                                                <form action="{{ route('houses.destroy',$house->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('houses.show',$house->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('houses.edit',$house->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $houses->links() !!}
            </div>
        </div>
    </div>
@endsection
