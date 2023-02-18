@extends('layouts.admin.app')
@section('admin')

<div class="page-content">
<div class="container-fluid">


<div class="row ">
    <div class="col-lg-6 m-auto text-center">
        <div class="card"><br><br>
<center>
            <img class="rounded-circle avatar-xl" src="{{url('assets/backend/image/no_image.png') }}" alt="Card image cap">
</center>

            <div class="card-body">
                <h4 class="card-title">email : {{ auth()->user()->email }} </h4>
                <hr>
                <h4 class="card-title">name : {{ auth()->user()->name }} </h4>
                <hr>                
                    <a href="{{route('admin.profile.edit')}}" class="btn btn-info btn-rounded waves-effect waves-light" >تعديل الحساب</a>
            </div>
        </div>
    </div> 
                            
        
</div> 


</div>
</div>

@endsection 