@extends('layouts.admin.app')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">الرسائل المرسله</h4>
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
				<th>الاسم</th>
				<th>الايميل</th>
				<th>رقم الهاتف</th>
				<th>العنوان</th>
				<th>الخدمه المطلوبه</th>
				<th>تاريخ الطلب</th>

			</thead>
	
	
			<tbody>
			@foreach($messages as $key => $message)
			<tr>
				<td> {{ $key+1}} </td>
				<td> {{ $message->full_name }} </td>
				<td> {{ $message->email }} </td>
				<td> {{ $message->phone }} </td>
				<td> {{ $message->address }} </td>
				<td> {{ $message->service }} </td>
				<td> {{ $message->created_at }} </td>
			   
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
