@extends('layouts.admin.app')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">المقالات</h4>
                </div>
            </div>
        </div>    
        
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <a href="{{route('admin.articles.add')}}" class="btn btn-info">اضافة مقال
                    </a>   
                </div>
            </div>
        </div>        
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

    <h4 class="card-title">المقالات</h4>
    

    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th></th>
            <th>اسم المقال</th>
            <th>رابط المقال</th>
            <th>العمليات</th>
        </thead>


        <tbody>
        @foreach($articles as $key => $article)
        <tr>
            <td> {{ $key}} </td>
            <td> {{ $article->name }} </td>
            <td> <a
                href="{{ env('APP_URL') . 'articles/' . $article->url }}">{{ asset('') . $article->url }}</a> </td>        
            <td>
                <a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                <a href="{{route('admin.articles.delete',$article->id)}}" class="btn btn-danger sm text-white" title="Permission">  <i class="fas fa-trash"></i> </a>
            </td>
           
        </tr>
        @endforeach
        
        </tbody>
    </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

     
        
    </div> <!-- container-fluid -->
</div>

@endsection
