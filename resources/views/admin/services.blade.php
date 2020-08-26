@extends('admin.master')
@section('title')
    Services Manager
@endsection
@section('content')
    @include('admin.sidebar')
    <div id="content-wrapper" class="d-flex flex-column" >
        <div id="content">
            @include('admin.topbar')
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Services</h1>
                    @if(Auth::User()->level ==2)
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add_Form" data-backdrop="static">
                            Thêm mới
                        </button>
                    @endif
                </div>
                @if(Auth::User()->level==2)
                <div id="Add_Form" class="modal fade" >
                    <div class="modal-dialog modal-dialog-scrollable modal-xl "  role="document" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Thêm Dịch Vụ</h1>
                            </div>
                                <div class="modal-body">
                                    <form enctype="multipart/form-data" role="form" name="form_upload" id="form_upload">
                                        <div class="form-group">
                                            <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                                            <label  for="service-name" class="label col-form-label-lg">Tên:</label>
{{--                                            <span class="label label-primary">Primary Label</span>--}}
                                            <input required type="text" class="form-control" id="service-name" placeholder="Enter Name" name="name">
                                        </div>
                                        <div class="form-group">

                                            <label  for="alt-name" class="label col-form-label-lg">Alt name:</label>
                                            {{--                                            <span class="label label-primary">Primary Label</span>--}}
                                            <input required type="text" class="form-control" id="alt_name" placeholder="Enter Alt Name (Eg: dich-vu-it)" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="FormControlFile" class="label label-primary">Logo</label>
                                            <input required type="file" accept=".jpg,.jpeg,.png" class="form-control-file" id="fileUpload" name="fileUpload">
                                            <img width="200px" id="output_image"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" style="margin-right: 30px" class="label label-primary">Loại</label>
                                            <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" value="4" >IT Support</label>
                                            <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" value="2" >Phái cử</label>
                                            <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id"value="3" >Gia công</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="label label-primary">Mô tả ngắn:</label>
                                            <textarea required class="form-control" id="short_description" name="short_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="label label-primary">Mô tả đầy đủ:</label>
                                            <textarea required class="form-control" id="full_description" name="full_description"></textarea>
                                            <script src="/ckeditor/ckeditor.js"></script>
                                            <script>
                                                CKEDITOR.replace( 'full_description', {
                                                    filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",
                                                    filebrowserUploadMethod: 'form'
                                                });
                                            </script>
                                        </div>
                                        <p class="alert alert-success" id="alert_success" name="alert_success" style="display: none">Thêm thành công</p>
                                        <button type="button"  class="btn btn-primary" id="btn-upload" value="Submit">Submit</button>
                                        <button type="button" class="btn btn-secondary btn_dismiss" data-dismiss="modal">Close</button>
                                    </form>


                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                @endif
                <div id="edit_form" class="modal fade" >
                    <div class="modal-dialog modal-dialog-scrollable modal-xl "  role="document" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Edit Service</h1>
                            </div>
                            <div class="modal-body">
                                <form enctype="multipart/form-data" role="form" name="form_edit" id="form_edit">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                                        <input type="hidden" name="edit_service_id" id="edit_service_id" >

                                        <label  for="edit_service-name" class="label col-form-label-lg">Tên:</label>
                                        {{--                                            <span class="label label-primary">Primary Label</span>--}}
                                        <input required type="text" class="form-control" id="edit_service-name" placeholder="Enter Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="edit_alt-name" class="label col-form-label-lg">Alt name:</label>
                                        <input required type="text" class="form-control" id="edit_alt_name" placeholder="Enter Alt Name (Eg: dich-vu-it)" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="FormControlFile" class="label label-primary">Logo</label>
                                        <input required type="file" accept=".jpg,.jpeg,.png" class="form-control-file" id="edit_fileUpload" name="edit_fileUpload">
                                        <img id="edit_output_image" width="500px"/>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="email" style="margin-right: 30px" class="label label-primary">Service Type:</label>--}}
{{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" value="4" >IT Support</label>--}}
{{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" >Option 2</label>--}}
{{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" >Option 3</label>--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="edit_short_description" class="label label-primary">Mô tả ngắn:</label>
                                        <textarea required class="form-control" id="edit_short_description" name="edit_short_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="label label-primary">Mô tả đầy đủ:</label>
                                        <textarea required class="form-control" id="edit_full_description" name="edit_full_description"></textarea>
                                        <script src="/ckeditor/ckeditor.js"></script>
                                        <script>
                                            CKEDITOR.replace( 'edit_full_description', {
                                                filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",
                                                filebrowserUploadMethod: 'form'
                                            });
                                        </script>
                                    </div>
                                    <p class="alert alert-success" id="alert_success" name="alert_success_edit" style="display: none">Thông tin thay đổi thành công</p>
                                    <button type="button"  class="btn btn-primary" id="btn-edit" value="Submit">Submit</button>
                                    <button type="button" class="btn btn-secondary edit_dismiss" data-dismiss="modal">Close</button>
                                </form>


                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
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

                <table class="table table-bordered table-hover" id="serviceTable">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Tên</th>
                        <th scope="col" class="text-center">Logo</th>
                        <th scope="col" class="text-center">Mô tả ngắn</th>
                        <th scope="col" class="text-center">Tuỳ chọn</th>
                        <th class="hidden" style="display: none">id</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <nav>
                    <ul class="pagination justify-content-center" id="navbar">

                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                            <span class="page-link" aria-hidden="true">‹</span>
                        </li>
                        <li class="page-item active"  aria-current="page"><a id="1"  class="page-link">1</a></li>




                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script>
        var flagsUrl = '{{ URL::asset('') }}';
        $(document).ready(function (){
            // $('#serviceTable').DataTable();
            fetchAll();

            $(".btn.btn-danger.btn_delete").click(function (){
                removeService(this);
                fetchAll();

            })
            $("#btn-edit").click(function (){
                editService(this);
                fetchAll();
            })
            $(".btn.btn-secondary.btn_dismiss").click(function (){

                CKEDITOR.instances['full_description'].setData('');
                $('p[name="alert_success"]').css("display", "none");
                $('#output_image').removeAttr('src');
                $('#form_upload')[0].reset();
                fetchAll();


            })
            $("#btn-upload").click(function () {
                uploadService(this);

            })
            // $("#page-item.page-1").addClass('active');

        })
    </script>
@endsection
