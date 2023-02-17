@extends('layouts.admin.app')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">عن الشركه</h4>
                </div>
            </div>
        </div>    
        
        {{-- <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <a href="{{route('admin.services.add')}}" class="btn btn-info">اضافة خدمة
                    </a>   
                </div>
            </div>
        </div>         --}}
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

    <h4 class="card-title">عن الشركة</h4>
    
	<div class="table-responsive">
		<table id="datatable" class="table table-bordered  nowrap" >
			<thead>
			<tr>
				<th></th>
				<th>عن الشركة</th>
				<th>الكلمات المفتاحيه</th>
				<th>العمليات</th>
			</thead>
	
	
			<tbody>
			@foreach($abouts as $key => $about)
			<tr>
				<td> {{ $key+1}} </td>
				<td> {!! $about->body !!} </td>
				<td> {{ $about->keywords }} </td>
				<td>
					<a href="{{route('admin.about.edit',$about->id)}}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
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
