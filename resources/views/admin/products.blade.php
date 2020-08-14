@extends('admin.master')
@section('title')
    Products Manager
@endsection
@section('content')
    @include('admin.sidebar')
    <div id="content-wrapper1" class="d-flex flex-column">
        <div id="content">
            @include('admin.topbar')
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Products</h1>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_product_form" data-backdrop="static">
                        Add Product
                    </button>
                </div>

                <div class="row" id="product_row">
                </div>
                <div id="add_product_form" class="modal fade" >
                    <div class="modal-dialog modal-dialog-scrollable modal-xl "  role="document" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Add Product</h1>
                            </div>
                            <div class="modal-body">
                                <form enctype="multipart/form-data" role="form" name="form_upload" id="form_upload">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                                        <label  for="product-name" class="label col-form-label-lg">Product name:</label>
                                        <input required type="text" class="form-control" id="product-name" placeholder="Enter Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="play-store-link" class="label col-form-label-lg">Play store link:</label>
                                        <input required type="text" class="form-control" id="play-store-link" placeholder="Play store link:" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="app-store-link" class="label col-form-label-lg">Appstore link:</label>
                                        <input required type="text" class="form-control" id="app-store-link" placeholder="Appstore link:" name="name">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label  for="alt-name" class="label col-form-label-lg">Alt name:</label>--}}
{{--                                        <input required type="text" class="form-control" id="alt_name" placeholder="Enter Alt Name (Eg: dich-vu-it)" name="name">--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="short_description" class="label label-primary">Short Description:</label>
                                        <textarea maxlength="150" required class="form-control" id="short_description" name="short_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="FormControlFile" class="label label-primary">Logo</label>
                                        <input required type="file" accept=".jpg,.jpeg,.png" class="form-control-file" id="fileUpload" name="fileUpload">
                                        <img width="200px" id="output_image"/>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="email" style="margin-right: 30px" class="label label-primary">Service Type:</label>--}}
{{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" value="4" >IT Support</label>--}}
{{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" value="2" >Phái cử</label>--}}
{{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id"value="3" >Gia công</label>--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <label for="email" class="label label-primary">Full Description:</label>--}}
{{--                                        <textarea required class="form-control" id="full_description" name="full_description"></textarea>--}}
{{--                                        <script src="/ckeditor/ckeditor.js"></script>--}}
{{--                                        <script>--}}
{{--                                            CKEDITOR.replace( 'full_description', {--}}
{{--                                                filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",--}}
{{--                                                filebrowserUploadMethod: 'form'--}}
{{--                                            });--}}
{{--                                        </script>--}}
{{--                                    </div>--}}
                                    <p class="alert alert-success" id="alert_success" name="alert_success" style="display: none">Thêm thành công</p>
                                    <button type="button"  class="btn btn-primary" id="btn-upload" value="Submit">Submit</button>
                                    <button type="button" class="btn btn-secondary btn_dismiss" data-dismiss="modal">Close</button>
                                </form>


                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <div id="edit_form" class="modal fade" >
                    <div class="modal-dialog modal-dialog-scrollable modal-xl "  role="document" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Edit Product</h1>
                            </div>
                            <div class="modal-body">
                                <form enctype="multipart/form-data" role="form" name="form_edit" id="form_edit">
                                    <div class="form-group">
                                        <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                                        <input type="hidden" name="edit-product-id" id="edit-product-id" >
                                        <label  for="edit_product-name" class="label col-form-label-lg">Product name:</label>
                                        <input required type="text" class="form-control" id="edit-product-name" placeholder="Enter Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="edit-play-store-link" class="label col-form-label-lg">Play store link:</label>
                                        <input required type="text" class="form-control" id="edit-play-store-link" placeholder="Play store link:" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="edit-app-store-link" class="label col-form-label-lg">Appstore link:</label>
                                        <input required type="text" class="form-control" id="edit-app-store-link" placeholder="Appstore link:" name="name">
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label  for="alt-name" class="label col-form-label-lg">Alt name:</label>--}}
                                    {{--                                        <input required type="text" class="form-control" id="alt_name" placeholder="Enter Alt Name (Eg: dich-vu-it)" name="name">--}}
                                    {{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="edit-short_description" class="label label-primary">Short Description:</label>
                                        <textarea maxlength="150" required class="form-control" id="edit-short-description" name="edit-short-description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="FormControlFile" class="label label-primary">Logo</label>
                                        <input required type="file" accept=".jpg,.jpeg,.png" class="form-control-file" id="edit_fileUpload" name="edit_fileUpload">
                                        <img width="200px" id="edit_output_image"/>
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label for="email" style="margin-right: 30px" class="label label-primary">Service Type:</label>--}}
                                    {{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" value="4" >IT Support</label>--}}
                                    {{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" value="2" >Phái cử</label>--}}
                                    {{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id"value="3" >Gia công</label>--}}
                                    {{--                                    </div>--}}

                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label for="email" class="label label-primary">Full Description:</label>--}}
                                    {{--                                        <textarea required class="form-control" id="full_description" name="full_description"></textarea>--}}
                                    {{--                                        <script src="/ckeditor/ckeditor.js"></script>--}}
                                    {{--                                        <script>--}}
                                    {{--                                            CKEDITOR.replace( 'full_description', {--}}
                                    {{--                                                filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",--}}
                                    {{--                                                filebrowserUploadMethod: 'form'--}}
                                    {{--                                            });--}}
                                    {{--                                        </script>--}}
                                    {{--                                    </div>--}}
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
        $(document).ready(function (){
            getAllProduct();
            $("#btn-upload").click(function () {
                addProduct(this);
                getAllProduct()
            })
            $(".btn.btn-secondary.btn_dismiss").click(function (){

                // CKEDITOR.instances['full_description'].setData('');
                $('p[name="alert_success"]').css("display", "none");
                $('#output_image').removeAttr('src');
                $('#form_upload')[0].reset();
                // $('#form_upload').trigger('reset');

            })
            $("#btn-edit").click(function (){

                editProduct(this);
                getAllProduct()
            })
            $(".btn.btn-danger.btn_delete").click(function (){

                removeProduct(this);
                getAllProduct();
            })

        })

    </script>





@endsection
