@extends('layouts.admin.app')
@section("admin")
<div class="page-content">
  <div class="container-fluid">
     <!-- start page title -->
     <div class="row">
      <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">تعديل عن الشركه</h4>
          </div>
      </div>
  </div>        
       
  <div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
  
              <h4 class="card-title">تعديل عن الشركه </h4>
              
              <form method="post" action="{{ route('admin.social.store') }}"  class="needs-validation" enctype="multipart/form-data"  novalidate >
                  @csrf
                  <div class="row mb-3">
                        <label for="text-area" class="col-sm-1 col-form-label">link</label>
                        <div class="col-sm-11">
                            <input type="url" placeholder="www.com" name="link" class="form-control">
                            @error('link')
                            <span class="text-danger"> {{ $message }} </span>
                                @enderror
                        </div>
                    </div>

                    
              <div class="row mb-3">
                <label for="image" class="col-sm-1 col-form-label">صوره</label>
                <div class="col-sm-11">
                    <input name="image" class="form-control" type="file" id="image"  required>
                    @error('image')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            

            <div class="row mb-3">
              <label for="image_alt" class="col-sm-1 col-form-label">عنوان الصوره</label>
              <div class="col-sm-11">
                  <input name="image_alt"  class="form-control" type="text" id="image_alt"  required>
                  @error('image_alt')
                    <span class="text-danger"> {{ $message }} </span>
                  @enderror
              </div>
          </div>
        
              <!-- end row -->
  
  <input type="submit" class="btn btn-info waves-effect waves-light validate" value="اضافة">
              </form>
               
             
             
          </div>
      </div>
  </div> <!-- end col -->
  </div>
   
  
  
  </div>
  </div>
@endsection

