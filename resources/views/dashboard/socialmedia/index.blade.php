@extends('layouts.admin.app')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">التواصل الاجتماعي</h4>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <a href="{{route('admin.social.create')}}" class="btn btn-info">اضافة سوشيال ميديا
                    </a>   
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

    <h4 class="card-title">الخدمات</h4>
    
	<div class="table-responsive">
		<table id="datatable" class="table table-bordered  nowrap" >
			<thead>
			<tr>
				<th></th>
				<th>اللينك</th>
				<th>الصوره</th>
				<th>عنوان</th>
				<th>العمليات</th>
			</thead>
	
	
			<tbody>
			@foreach($social as $key => $s)
			<tr>
				<td> {{ $key+1}} </td>
				<td> {{ $s->link }} </td>
				<td>
                    <div class="w-25 text-center">
                        <img src="{{url('assets/images/icons/'.$s->image)}}" class="w-100" alt="">
                    </div>
                </td>
                <td>
                    {{$s->image_alt}}
                </td>
				<td>
					<a href="{{route('admin.social.edit',$s->id)}}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
					<a href="{{route('admin.social.delete',$s->id)}}" class="btn btn-danger sm" id="delete" title="Delete Data">  <i class="fas fa-trash"></i> </a>
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
