@extends('layouts.admin.app')
@section("admin")
<div class="page-content">
  <div class="container-fluid">
     <!-- start page title -->
     <div class="row">
      <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">تعديل الحساب</h4>
          </div>
      </div>
  </div>             
  <div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
  
              <h4 class="card-title">تعديل الحساب </h4>
              
              <form method="post" action="{{ route('admin.profile.update') }}"  class="needs-validation" enctype="multipart/form-data"  novalidate >
                  @csrf
                  <div class="row mb-3">
                        <label for="text-area" class="col-sm-1 col-form-label">Name</label>
                        <div class="col-sm-11">
                            <input type="text" value="{{auth()->user()->name}}" name="name" class="form-control">
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                                @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="text-area" class="col-sm-1 col-form-label">Email</label>
                        <div class="col-sm-11">
                            <input type="text" value="{{auth()->user()->email}}" name="email" class="form-control">
                            @error('email')
                            <span class="text-danger"> {{ $message }} </span>
                                @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="text-area" class="col-sm-1 col-form-label">Password</label>
                        <div class="col-sm-11">
                            <input type="password" name="password" placeholder="ادخل كلمه المرور" class="form-control">
                            @error('password')
                            <span class="text-danger"> {{ $message }} </span>
                                @enderror
                        </div>
                    </div>

                    
                    <div class="row mb-3">
                        <label for="text-area" class="col-sm-1 col-form-label">Re Password</label>
                        <div class="col-sm-11">
                            <input type="password" name="re_password" placeholder=" ادخل كلمه المرور مره اخري" class="form-control">
                            @error('re_password')
                            <span class="text-danger"> {{ $message }} </span>
                                @enderror
                        </div>
                    </div>

        
              <!-- end row -->
  
  <input type="submit" class="btn btn-info waves-effect waves-light validate" value="تعديل">
              </form>
               
             
             
          </div>
      </div>
  </div> <!-- end col -->
  </div>
   
  
  
  </div>
  </div>
@endsection

