@extends('layouts.admin.app')
@section("admin")
<div class="page-content">
  <div class="container-fluid">
     <!-- start page title -->
     <div class="row">
      <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">تعديل مقال</h4>
          </div>
      </div>
  </div>             
  <div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
  
              <h4 class="card-title">تعديل مقال </h4>
              
              <form method="post" action="{{ route('admin.discount.update') }}"  class="needs-validation" enctype="multipart/form-data"  novalidate >
                  @csrf
                  <input type="hidden" name="id" value="{{$discount->id}}">
                  <div class="row mb-3">
                        <label for="text-area" class="col-sm-1 col-form-label">وصف الخصم</label>
                        <div class="col-sm-11">
                          <textarea name="body" id="text-area" cols="30" rows="10">{!! $discount->body !!}</textarea>
                            @error('body')
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

@section('script')
<script>
    CKEDITOR.replace( 'text-area');
</script>

@endsection