@extends('layouts/app')
@section("content")
<div class="container">
	<a class="btn btn-primary mb-2" href="{{ route('admin.services.add') }}">Add New Service</a>
	<table class="table">
		<tr class="table-header">
			<th class="header__item">Name</a></th>
			<th class="header__item">URL</a></th>
			<th class="header__item">Actions</a></th>
		</tr>
		<tbody class="table-content">	
        @foreach($services AS $service)
			<tr class="table-row">		
				<td class="table-data">{{ $service->name }}</td>
				<td class="table-data"><a href="{{ env("APP_URL") . "service/" . $service->url }}">{{ asset("") . $service->url }}</a></td>
				<td class="table-dvata">
                    <a href="{{ route('admin.services.edit', $service->id) }}">Edit</a>
                    <a href="{{ route('admin.services.delete', $service->id) }}">Delete</a>
                </td>
			</tr>
        @endforeach
		</tbody>	
	</table>
</div>
@endsection