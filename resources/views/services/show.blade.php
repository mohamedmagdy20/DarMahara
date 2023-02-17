@extends('layouts.admin.app')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">الخدمات</h4>
                </div>
            </div>
        </div>    
        
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <a href="{{route('admin.services.add')}}" class="btn btn-info">اضافة خدمة
                    </a>   
                </div>
            </div>
        </div>        
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

    <h4 class="card-title">الخدمات</h4>
    
	<div class="table-responsive">
		<table id="datatable" class="table table-bordered  nowrap" >
			<thead>
			<tr>
				<th></th>
				<th>اسم الخدمه</th>
				<th>رابط الخدمه</th>
				<th>العمليات</th>
			</thead>
	
	
			<tbody>
			@foreach($services as $key => $service)
			<tr>
				<td> {{ $key}} </td>
				<td> {{ $service->name }} </td>
				<td> <a
					href="{{ env('APP_URL') . 'services/' . $service->url }}">{{ asset('') . $service->url }}</a> </td>        
				<td>
					<a href="{{route('admin.services.edit',$service->id)}}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
					<a href="{{route('admin.services.delete',$service->id)}}" class="btn btn-danger sm text-white" id="delete">  <i class="fas fa-trash"></i> </a>
				</td>
			   
			</tr>
			@endforeach
			
			</tbody>
		</table>
	
	</div>
    
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

     
        
    </div> <!-- container-fluid -->
</div>

@endsection
