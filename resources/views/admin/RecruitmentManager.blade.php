@extends('admin.master')
@section('title')
    HR Manager
@endsection
@section('content')
    @include('admin.sidebar')
    <div id="content-wrapper1" class="d-flex flex-column">
        <div id="content">
            @include('admin.topbar')
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tin Tuyển dụng</h1>
                    @if(Auth::User()->level ==2)
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_post_form" data-backdrop="static">
                        Thêm
                    </button>
                    @endif
                </div>
                <div class="row" id="recruitment_row">


                </div>
                @if(Auth::User()->level ==2)
                <div id="add_post_form" class="modal fade" >
                    <div class="modal-dialog modal-dialog-scrollable modal-xl "  role="document" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Thêm Bài tuyển dụng</h1>
                            </div>
                            <div class="modal-body">
                                <form enctype="multipart/form-data" role="form" name="form_upload" id="form_upload">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                                        <label  for="job_name" class="label col-form-label-lg">Tên Công việc</label>
                                        <input required type="text" class="form-control" id="job_name" placeholder="Nhập tên" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="job_type" class="label col-form-label-lg">Loại hình công việc</label>
                                        <input required type="text" class="form-control" id="job_type" placeholder="toàn thời gian/bán thời gian" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="job_exp" class="label col-form-label-lg">Yêu Cầu Kinh Nghiệm</label>
                                        <input required type="text" class="form-control" id="job_exp" placeholder="yêu cầu kinh nghiệm (năm)" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="salary" class="label col-form-label-lg">Mức Lương</label>
                                        <input required type="text" class="form-control" id="salary" placeholder="lương ($)" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="job_description" class="label label-primary">Mô tả chi tiết:</label>
                                        <textarea  required class="form-control" id="job_description" name="job_description"></textarea>
                                    </div>
                                    <script>
                                        CKEDITOR.replace( 'job_description', {
                                            filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",
                                            filebrowserUploadMethod: 'form'
                                        });
                                    </script>
                                    <div class="form-group">
                                        <label  for="job_expDate" class="label col-form-label-lg">Hết hạn vào</label>
                                        <input required type="date" class="form-control" id="job_expDate" placeholder="hết hạn vào" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="FormControlFile" class="label label-primary">Ảnh đại diện</label>
                                        <input required type="file" accept=".jpg,.jpeg,.png" class="form-control-file" id="fileUpload" name="fileUpload">
                                        <img width="200px" id="output_image"/>
                                    </div>

                                    <p class="alert alert-success" id="alert_success" name="alert_success" style="display: none">Thêm thành công</p>
                                    <button type="button"  class="btn btn-primary" id="btn-upload" value="Submit">Submit</button>
                                    <button type="button" class="btn btn-secondary btn_dismiss" data-dismiss="modal">Close</button>
                                </form>


                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                @endif
                <div id="edit_form" class="modal fade" >
                    <div class="modal-dialog modal-dialog-scrollable modal-xl "  role="document" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Sửa bài viết</h1>
                            </div>
                            <div class="modal-body">
                                <form enctype="multipart/form-data" role="form" name="form_edit" id="form_edit">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                                        <input type="hidden" name="edit_post_id" id="edit_post_id" >
                                        <label  for="edit_product-name" class="label col-form-label-lg">Tên công việc:</label>
                                        <input required type="text" class="form-control" id="edit_job_name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="edit-play-store-link" class="label col-form-label-lg">Loại công việc:</label>
                                        <input required type="text" class="form-control" id="edit_job_type"  name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="edit_job_exp" class="label col-form-label-lg">Yêu Cầu Kinh Nghiệm</label>
                                        <input required type="text" class="form-control" id="edit_job_exp" placeholder="yêu cầu kinh nghiệm (năm)" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label  for="edit_salary label col-form-label-lg">Mức Lương:</label>
                                        <input required type="text" class="form-control" id="edit_salary"  name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="edit_job_expDate" class="label col-form-label-lg">Hết hạn vào</label>
                                        <input required type="date" class="form-control" id="edit_job_expDate"  name="name">
                                    </div>
                                     <div class="form-group">
                                        <label for="edit_job_description" class="label label-primary">Chi tiết công việc:</label>
                                        <textarea required class="form-control" id="edit_job_description" name="edit_job_description"></textarea>
                                    </div>
                                    <script>
                                        CKEDITOR.replace( 'edit_job_description', {
                                            filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",
                                            filebrowserUploadMethod: 'form'
                                        });
                                    </script>
                                    <div class="form-group">
                                        <label for="FormControlFile" class="label label-primary">Ảnh đại diện</label>
                                        <input required type="file" accept=".jpg,.jpeg,.png" class="form-control-file" id="edit_fileUpload" name="edit_fileUpload">
                                        <img width="200px" id="edit_output_image"/>
                                    </div>

                                    <p class="alert alert-success" id="alert_success_edit" name="alert_success_edit" style="display: none">Thông tin thay đổi thành công</p>
                                    <button type="button"  class="btn btn-primary" id="btn-edit" value="Submit">Submit</button>
                                    <button type="button" class="btn btn-secondary edit_dismiss" data-dismiss="modal">Close</button>
                                </form>


                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <div id="delete_warning" class="modal fade">
                    <div class="modal-dialog modal-confirm">
                        <div class="modal-content">
                            <div class="modal-header flex-column">

                                <h4 class="modal-title w-100">Are you sure?</h4>

                            </div>
                            <div class="modal-body">
                                <p>Do you really want to delete this record? This action cannot be undone.</p>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button"  class="btn btn-danger btn_delete" data-dismiss="modal" >Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var flagsUrl = '{{ URL::asset('') }}';
        $(document).ready(function (){
            getAllRecruitmentPost();
            $("#btn-upload").click(function () {
                addRecruitPost();
                getAllRecruitmentPost();

            })
            $(".btn.btn-danger.btn_delete").click(function (){
                deleteRecruitPost(this);
                getAllRecruitmentPost();

            })
            $("#btn-edit").click(function (){
                editRecruitPost();
                getAllRecruitmentPost();
            })
        })
    </script>
@endsection
