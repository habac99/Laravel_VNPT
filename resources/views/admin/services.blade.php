@extends('admin.master')
@section('title')
    Services Manager
@endsection
@section('content')
    @include('admin.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('admin.topbar')
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Services</h1>
                </div>


                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Add_Form" data-backdrop="static">
                    Add Services
                </button>
                <div id="Add_Form" class="modal fade" >
                    <div class="modal-dialog modal-dialog-scrollable modal-xl "  role="document" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title">Add Service</h1>
                            </div>
                                <div class="modal-body">
                                    <form enctype="multipart/form-data" role="form" name="form_upload" id="form_upload">
                                        <div class="form-group">
                                            <input type="hidden" name="_token" id="csrf" value="{{ csrf_token() }}">
                                            <label  for="service-name" class="label col-form-label-lg">Service name:</label>
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
                                            <img id="output_image"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" style="margin-right: 30px" class="label label-primary">Service Type:</label>
                                            <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" value="4" >IT Support</label>
                                            <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" >Option 2</label>
                                            <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" >Option 3</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="label label-primary">Short Description:</label>
                                            <textarea required class="form-control" id="short_description" name="short_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="label label-primary">Full Description:</label>
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

                                        <label  for="edit_service-name" class="label col-form-label-lg">Service name:</label>
                                        {{--                                            <span class="label label-primary">Primary Label</span>--}}
                                        <input required type="text" class="form-control" id="edit_service-name" placeholder="Enter Name" name="name">
                                    </div>
                                    <div class="form-group">

                                        <label  for="edit_alt-name" class="label col-form-label-lg">Alt name:</label>
                                        {{--                                            <span class="label label-primary">Primary Label</span>--}}
                                        <input required type="text" class="form-control" id="edit_alt_name" placeholder="Enter Alt Name (Eg: dich-vu-it)" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="FormControlFile" class="label label-primary">Logo</label>
                                        <input required type="file" accept=".jpg,.jpeg,.png" class="form-control-file" id="edit_fileUpload" name="edit_fileUpload">
                                        <img id="edit_output_image"/>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="email" style="margin-right: 30px" class="label label-primary">Service Type:</label>--}}
{{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" value="4" >IT Support</label>--}}
{{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" >Option 2</label>--}}
{{--                                        <label class="radio-inline" style="margin-right: 30px"><input type="radio" id="service_id" name="service_id" >Option 3</label>--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="edit_short_description" class="label label-primary">Short Description:</label>
                                        <textarea required class="form-control" id="edit_short_description" name="edit_short_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="label label-primary">Full Description:</label>
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

                {{--                    <div class="collapse" id="AddServiceForm">--}}
{{--                        <div class="form-group">--}}
{{--                            <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">--}}
{{--                            <label for="email">Service name:</label>--}}
{{--                            <input type="text" class="form-control" id="service-name" placeholder="Enter Name" name="name">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email" style="margin-right: 30px">Service Type:</label>--}}
{{--                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">--}}
{{--                             <label class="radio-inline" style="margin-right: 30px"><input type="radio" name="optradio" value="4" >Option 1</label>--}}
{{--                             <label class="radio-inline" style="margin-right: 30px"><input type="radio" name="optradio" >Option 2</label>--}}
{{--                             <label class="radio-inline" style="margin-right: 30px"><input type="radio" name="optradio" >Option 3</label>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email">Short Description:</label>--}}
{{--                            <textarea class="form-control" id="short_description" name="short_description"></textarea>--}}

{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email">Full Description:</label>--}}
{{--                            <textarea class="form-control" id="Full_Description" name="summary_ckeditor"></textarea>--}}
{{--                            <script src="/ckeditor/ckeditor.js"></script>--}}
{{--                            <script>--}}
{{--                                CKEDITOR.replace( 'Full_Description', {--}}
{{--                                    filebrowserUploadUrl: "{{route('ckeditor', ['_token' => csrf_token() ])}}",--}}
{{--                                    filebrowserUploadMethod: 'form'--}}
{{--                                });--}}
{{--                            </script>--}}
{{--                        </div>--}}
{{--                        <p class="alert alert-success" id="alert_success" name="alert_success" style="display: none"></p>--}}
{{--                        <button type="submit" class="btn btn-primary" id="btn-upload">Submit</button>--}}
{{--                    </div>--}}
                <table class="table table-bordered table-hover" id="serviceTable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Service Name</th>
                        <th scope="col">Logo image</th>
                        <th scope="col">Short Description</th>
                        <th scope="col">Options</th>
                        <th class="hidden" style="display: none">id</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                    </div>




            </div>
    </div>
{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function () {--}}

{{--            fetchAll();--}}

{{--        })--}}
{{--        function fetchAll() {--}}
{{--            $.ajax({--}}
{{--                url: '/admin/serviceJson',--}}
{{--                type: 'get',--}}
{{--                dataType: 'json',--}}
{{--                success: function (response) {--}}
{{--                    var len = 0;--}}
{{--                    $('#serviceTable tbody').empty();--}}
{{--                    if (response['services'] != null) {--}}
{{--                        len = response['services'].length;--}}
{{--                    }--}}
{{--                    if (len > 0) {--}}
{{--                        for (var i = 0; i < len; i++) {--}}
{{--                            var id = response['services'][i].id;--}}
{{--                            var service_name = response['services'][i].service_name;--}}
{{--                            var logo_image = response['services'][i].logo;--}}
{{--                            var short_description = response['services'][i].short_description;--}}

{{--                            var tr_str = "<tr>" +--}}
{{--                                "<td>" + (i + 1) + "</td>" +--}}
{{--                                "<td>" + service_name + "</td>" +--}}
{{--                                "<td>" + "<img style='height: 20%' src=" + logo_image + "></td>" +--}}
{{--                                "<td>" + short_description + "</td>" +--}}
{{--                                "<td>" +--}}
{{--                                "<button type='submit' class='btn btn-info btn-update'" + "id='" + id + "'>" + 'Sửa' + "</button>" +--}}
{{--                                "<button type='submit' class='btn btn-danger btn-remove' " + "id='" + id + "'>" + 'Xoá' + "</button>" +--}}
{{--                                "</td>" +--}}
{{--                                "<td style='display: none" + id + "td>"--}}
{{--                            "</tr>";--}}

{{--                            $("#serviceTable tbody").append(tr_str);--}}
{{--                        }--}}

{{--                    }--}}
{{--                    $(".btn.btn-info.btn-update").click(function (){--}}
{{--                        // alert('clicked');--}}
{{--                        update(this);--}}
{{--                    })--}}
{{--                    $(".btn.btn-danger.btn-remove").click(function (){--}}
{{--                        remove(this);--}}
{{--                    })--}}


{{--                    setTimeout(fetchAll, 5000);--}}

{{--                }--}}
{{--            })--}}


{{--        }--}}
{{--        // $(".btn.btn-info").click(function (){--}}
{{--        //     alert('clicked');--}}
{{--        //     // abc(this);--}}
{{--        // })--}}
{{--        function update(button) {--}}
{{--            console.log(button.id);--}}
{{--            // test.remove();--}}
{{--        }--}}
{{--        function remove(button){--}}
{{--            console.log(typeof button.id);--}}
{{--            var id = parseInt(button.id);--}}
{{--            console.log(typeof id);--}}
{{--          var xhr=  $.ajax({--}}
{{--                url: '/admin/delete/service',--}}
{{--                type: 'post',--}}
{{--                data:{--}}
{{--                    _token:$("#csrf").val(),--}}
{{--                    id: id,--}}
{{--                },--}}
{{--                success: function (result){--}}
{{--                    var dataResult = JSON.parse(result);--}}
{{--                    if(dataResult.statusCode==200){--}}
{{--                        // window.location = "/admin/add/services";--}}

{{--                        alert('Xoá thành công');--}}

{{--                    }--}}
{{--                    else if(dataResult.statusCode==201){--}}
{{--                        alert("Error occured !");--}}
{{--                    }--}}
{{--                }--}}
{{--            })--}}
{{--            console.log(xhr);--}}
{{--        }--}}
{{--        $("#btn-upload").click(function (){--}}
{{--            // insert()--}}
{{--            var service_id = $('input[name="optradio"]:checked').val();--}}
{{--            var service_name = $('#service-name').val();--}}
{{--            var short_description  = $('#short_description').val();--}}
{{--            var full_description  = $('textarea[name="summary_ckeditor"]').val();--}}
{{--            console.log(service_name, service_id, short_description, full_description,$("#csrf").val());--}}
{{--              $.ajax({--}}
{{--                url: '/admin/add/services',--}}
{{--                type: 'post',--}}
{{--                data:{--}}
{{--                    _token:$("#csrf").val(),--}}
{{--                    service_id : service_id,--}}
{{--                    service_name: service_name,--}}
{{--                    short_description: short_description,--}}
{{--                    full_description:full_description,--}}
{{--                },--}}
{{--                success: function (result){--}}
{{--                    console.log(result);--}}
{{--                    var dataResult = JSON.parse(result);--}}
{{--                    if(dataResult.statusCode==200){--}}
{{--                        // window.location = "/admin/add/services";--}}
{{--                        $('p[name="alert_success"]').css("display","block");--}}
{{--                        $('p[name="alert_success"]').html('Thêm thành công');--}}

{{--                    }--}}
{{--                    else if(dataResult.statusCode==201){--}}
{{--                        alert("Error occured !");--}}
{{--                    }--}}

{{--                }--}}
{{--            })--}}
{{--            // console.log(xhr);--}}
{{--        })--}}



{{--    </script>--}}

@endsection
