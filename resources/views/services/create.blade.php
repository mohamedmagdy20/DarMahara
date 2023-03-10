@extends('layouts.admin.app')
@section("admin")
<div class="page-content">
  <div class="container-fluid">
     <!-- start page title -->
     <div class="row">
      <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">اضافه مقال</h4>
          </div>
      </div>
  </div>             
  <div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
  
              <h4 class="card-title">اضافة مقال </h4>
              
              <form method="post" action="{{ route('admin.services.store') }}"  class="needs-validation" enctype="multipart/form-data"  novalidate >
                  @csrf
  
              <div class="row mb-3">
                  <label for="example-text-input" class="col-sm-1 col-form-label">اسم الخدمه</label>
                  <div class="col-sm-11">
                      <input name="name" class="form-control" type="text" id="example-text-input" placeholder="برجاء ادخال الاسم   " required>
                      @error('name')
                      <span class="text-danger"> {{ $message }} </span>
                      @enderror
                  </div>
              </div>
              

              <div class="row mb-3">
                <label for="image" class="col-sm-1 col-form-label">صوره 1 </label>
                <div class="col-sm-11">
                    <input name="icon_image" class="form-control" type="file" id="image"  required>
                    @error('icon_image')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            

            <div class="row mb-3">
              <label for="image_alt" class="col-sm-1 col-form-label">عنوان الصوره 1</label>
              <div class="col-sm-11">
                  <input name="icon_image_alt"  class="form-control" type="text" id="image_alt"  required>
                  @error('icon_image_alt')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
              </div>
          </div>

              <div class="row mb-3">
                <label for="image" class="col-sm-1 col-form-label">صوره 2</label>
                <div class="col-sm-11">
                    <input name="image" class="form-control" type="file" id="image"  required>
                    @error('image')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            

            <div class="row mb-3">
              <label for="image_alt" class="col-sm-1 col-form-label">عنوان الصوره 2</label>
              <div class="col-sm-11">
                  <input name="image_alt"  class="form-control" type="text" id="image_alt"  required>
                  @error('image_alt')
                  <span class="text-danger"> {{ $message }} </span>
                  @enderror
              </div>
          </div>

          
          <div class="row mb-3">
            <label for="text-area" class="col-sm-1 col-form-label">الوصف</label>
            <div class="col-sm-11">
              <textarea name="description" id="text-area" cols="30" rows="10"></textarea>
                @error('description')
                <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>
        </div>

        
        <div class="row mb-3">
          <label for="short_desc" class="col-sm-1 col-form-label">وصف قصير</label>
          <div class="col-sm-11">
           <input type="text" name="short_description" id="short_decs"  class="form-control">
              @error('short_description')
              <span class="text-danger"> {{ $message }} </span>
              @enderror
          </div>
      </div>

      
      <div class="row mb-3">
        <label for="meta_title" class="col-sm-1 col-form-label">Meta Title</label>
        <div class="col-sm-11">
         <input type="text" name="meta_title"  id="meta_title"  class="form-control">
            @error('meta_title')
            <span class="text-danger"> {{ $message }} </span>
            @enderror
        </div>
    </div>


    <div class="row mb-3">
      <label for="meta_description" class="col-sm-1 col-form-label">Meta Description</label>
      <textarea name="meta_description"  id="meta_description" class="form-control" cols="30" rows="10"></textarea>
      <div class="col-sm-11">

          @error('meta_description')
          <span class="text-danger"> {{ $message }} </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
    <label for="input-tags" class="col-sm-1 col-form-label">Keywords</label>
    <div class="col-sm-11">
     <input type="text" autocomplete="off"  name="keywords"  id="input-tags"  class="form-control" >
        @error('keywords')
        <span class="text-danger"> {{ $message }} </span>
        @enderror
    </div>
</div>


    <div class="row mb-3">
      <label for="url" class="col-sm-1 col-form-label">Url</label>
      <div class="col-sm-11">
       <input type="url" name="url"  id="url"  class="form-control" >
          @error('url')
          <span class="text-danger"> {{ $message }} </span>
          @enderror
      </div>
    </div>

  
              <!-- end row -->
  
  <input type="submit" class="btn btn-info waves-effect waves-light validate" value="اضافه">
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

<script>
    new TomSelect("#input-tags",{
    persist: false,
    createOnBlur: true,
    create: true
    });
</script>
@endsection