$(document).ready(function () {



    $("#edit_fileUpload").change(function() {
        edit_preview(this);
    });
    $("#fileUpload").change(function() {
        upload_preview(this);
    });

    $(".btn.btn-secondary.edit_dismiss").click(function (){
        $('p[name="alert_success_edit"]').css("display", "none");
    })





})
function fetchAll() {
    $.ajax({
        url: '/admin/serviceJson',
        type: 'get',
        dataType: 'json',
        success: function (response) {
            var len = 0;
            $('#serviceTable tbody').empty();
            if (response['services'] != null) {
                len = response['services'].length;
            }
            if (len > 0) {
                for (var i = 0; i < len; i++) {
                    var id = response['services'][i].id;
                    var service_name = response['services'][i].service_name;
                    var logo_image = response['services'][i].logo;
                    var short_description = response['services'][i].short_description;

                    var tr_str = "<tr>" +
                        "<td>" + (i + 1) + "</td>" +
                        "<td>" + service_name + "</td>" +
                        "<td>" + "<img style='height: 78px' src=" + '"' + logo_image + '"' + "></td>" +
                        "<td>" + short_description + "</td>" +
                        "<td>" +
                        "<button type='submit' style='margin-bottom: 5px' class='btn btn-info btn-update' data-toggle='modal' data-target='#edit_form' data-backdrop='static' " + "id='" + id +  "'>" + 'Sửa' + "</button>" +
                        "<button type='submit' class='btn btn-danger btn-remove' data-toggle='modal' data-target='#delete_warning' data-backdrop='static' " + "id='" + id + "'>" + 'Xoá' + "</button>" +
                        "</td>" +
                        "<td style='display: none" + id + "td>"
                    "</tr>";

                    $("#serviceTable tbody").append(tr_str);
                }

            }
            $(".btn.btn-info.btn-update").click(function (){
                // alert('clicked');
                load(this);
            })

            $(".btn.btn-danger.btn-remove").click(function (){

                console.log(this.id);
                $(".btn.btn-danger.btn_delete").attr('id',this.id);
            })


            // setTimeout(fetchAll, 5000);

        }
    })


}

function edit_preview(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(event) {
            $('#edit_output_image').attr('src', event.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function upload_preview(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(event) {
            $('#output_image').attr('src', event.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }

}
function load(button) {
    console.log(button.id);
    var id = parseInt(button.id);
    $.ajax({
        url: '/admin/edit/service',
        type: 'get',
        dataType: 'json',
        data:{
            id: id
        },
        success: function (response){
            var len = 0;
            if (response['service'] != null) {
                len = response['service'].length;
            }
            $("#edit_service-name").val(response['service'][0].service_name);
            $("#edit_service_id").val(response['service'][0].id)
            $("#edit_short_description").val(response['service'][0].short_description);
            $("#edit_alt_name").val(response['service'][0].alt_name);
            // $("#edit_full_description").val(response['service'][0].full_description);
            CKEDITOR.instances['edit_full_description'].setData(response['service'][0].full_description);
            $("#edit_output_image").attr('src',response['service'][0].logo);

        }

    })
    // test.remove();
}
function removeService(button){
    console.log(typeof button.id);
    var id = parseInt(button.id);
    console.log(typeof id);
    console.log(id);
    var xhr=  $.ajax({
        url: '/admin/delete/service',
        type: 'post',
        data:{
            _token:$("#csrf").val(),
            id: id,
        },
        success: function (result){
            var dataResult = JSON.parse(result);
            if(dataResult.statusCode===200){
                // window.location = "/admin/add/services";

                alert('Xoá thành công');

            }
            else if(dataResult.statusCode===201){
                alert("Error occured !");
            }
        }
    })
    console.log(xhr);
}
function editService(){
    var service_name = $('#edit_service-name').val().trim();
    var short_description = $('#edit_short_description').val().trim();
    // var full_description  = $('textarea[name="summary_ckeditor"]').val();
    var full_description = CKEDITOR.instances['edit_full_description'].getData().trim();
    var alt_name = $("#edit_alt_name").val().trim();
    var form = $('#form_edit')[0];
    var id = $("#edit_service_id").val();
    var form_data = new FormData(form);
    form_data.append('service_name',service_name);
    form_data.append('short_description',short_description);
    form_data.append('full_description',full_description);
    form_data.append('alt_name',alt_name);
    form_data.append('id',id);
    console.log(service_name,alt_name, short_description, full_description, id);
    if(service_name !== '' && short_description !== '' &&
        full_description !== '' && id !== '' && alt_name !== ''){
        var xhr = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            enctype: 'multipart/form-data',
            url: '/admin/edit/service',
            type: 'post',
            data:form_data,
            processData: false,
            contentType: false,
            success: function (result) {
                console.log(result);
                var dataResult = JSON.parse(result);
                if (dataResult.statusCode === 200) {
                    // window.location = "/admin/add/services";
                    $('p[name="alert_success_edit"]').css("display", "block");
                    // $('p[name="alert_success_edit"]').html('Thông tin thay đổi thành công');

                } else if (dataResult.statusCode === 201) {
                    alert("Có lỗi xảy ra !");
                }

            }


        })
        console.log(xhr);


    }
    else{
        alert('Vui lòng điền đầy đú thông tin')
    }

}
function uploadService(button){
    var service_id = $('input[name="service_id"]:checked').val().trim();
    var service_name = $('#service-name').val().trim();
    var short_description = $('#short_description').val().trim();
    var alt_name = $("#alt_name").val().trim();
    var full_description = CKEDITOR.instances['full_description'].getData().trim();
    var form = $('#form_upload')[0];
    var form_data = new FormData(form);
    form_data.append('service_id',service_id);
    form_data.append('alt_name',alt_name);
    form_data.append('service_name',service_name);
    form_data.append('short_description',short_description);
    form_data.append('full_description',full_description);

    // console.log(service_name, service_id, short_description, full_description, $("#csrf").val());
    console.log(form_data);
    if (service_id != null && service_name != null && short_description != null && full_description != null) {
        var xhr = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            enctype: 'multipart/form-data',
            url: '/admin/add/services',
            type: 'post',
            data:form_data,
            processData: false,
            contentType: false,
            success: function (result) {
                console.log(result);
                var dataResult = JSON.parse(result);
                if (dataResult.statusCode === 200) {
                    $('p[name="alert_success"]').css("display", "block");
                }else if (dataResult.statusCode === 201) {
                    alert("Error occured !");
                }

            }
        })
        console.log(xhr);
    }
    else{
        alert('Vui lòng điền đầy đú thông tin')
    }

}
function getAllProduct(){
    $.ajax({
        url: '/admin/productJson',
        type: 'get',
        dataType: 'json',
        success: function(response){
            var len = 0;
            $("#product_row").empty();

            if (response['products'] != null) {
                len = response['products'].length;
            }
            if(len>0){

                for (var i = 0; i < len; i++){
                    var id = response['products'][i].id;
                    var product_name = response['products'][i].product_name;
                    var logo = response['products'][i].logo;
                    var short_description = response['products'][i].short_description;
                    var html = "<div class=\"col-xl-3 col-md-6 mb-4\">"
                        + "<div class=\"card border-primary shadow h-auto py-2\">"
                        +   "<div class=\"card-body\">"
                        +       "<div class=\"row no-gutters align-items-center\">"
                        +           "<div class=\"col mr-0 image-block\">"
                        +               "<img style=\"width:100%\" src=" + '"' + logo + '"' + ">"
                        +                "<div class=\"blank\"></div>"
                        +                   "<div class=\"description\">"
                        +                        "<div class=\"align-text-top\" style=\"margin-bottom: 20px\">" + "<b>"+ product_name + "</b>" + "</div>"
                        +                        "<div class=\"align-text-top\">"+ short_description +" </div>"
                        +                   "</div>"
                        +               "</div>"
                        +           "</div>"
                        +           "<div class=\"row\">"
                        +               "<div class=\"col d-flex \">"
                        +                   "<button class=\"btn btn-primary btn-update\" data-toggle='modal' data-target='#edit_form' data-backdrop='static' " + "id='" + id + "'" + " style=\"margin-right: 50px; margin-top: 5px\">"+ "Sửa" + "</button>"
                        +                   "<button class=\"btn btn-danger btn-remove\" data-toggle='modal' data-target='#delete_warning' data-backdrop='static' " + "id='" + id + "'" + "style=\"margin-left: 54px; margin-top: 5px\">" + "Xoá" + "</button>"
                        +               "</div>"
                        +           "</div>"
                        +       "</div>"
                        +   "</div>"
                        +"</div>";
                    $("#product_row").append(html);

                }
                $(".btn.btn-danger.btn-remove").click(function (){
                    console.log(this.id);
                    $(".btn.btn-danger.btn_delete").attr('id',this.id);
                })
                $(".btn.btn-primary.btn-update").click(function (){
                    loadOneProduct(this);
                })
                // setTimeout(getAllProduct, 5000);
            }

        }
    })
}
function addProduct(){
    // console.log('add product')

    var product_name = $('#product-name').val().trim();
    var play_store = $("#play-store-link").val().trim();
    var app_store = $("#app-store-link").val().trim();
    var short_description = $('#short_description').val().trim();
    var form = $('#form_upload')[0];
    var form_data = new FormData(form);


    form_data.append('product_name',product_name);
    form_data.append('google_link',play_store);
    form_data.append('apple_link',app_store);
    form_data.append('short_description',short_description);

    // console.log(form_data);
    // console.log(product_name, play_store, app_store, short_description, $("#csrf").val());
    // console.log(form_data);
    if (product_name != null && play_store != null && short_description != null && app_store != null) {
        var xhr = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            enctype: 'multipart/form-data',
            url: '/admin/add/product',
            type: 'post',
            data:form_data,
            processData: false,
            contentType: false,
            success: function (result) {
                console.log(result);
                var dataResult = JSON.parse(result);
                if (dataResult.statusCode === 200) {
                    // window.location = "/admin/add/services";
                    $('p[name="alert_success"]').css("display", "block");


                } else if (dataResult.statusCode === 201) {
                    alert("Image missing !");
                }

            }
        })
        console.log(xhr);
    }
    else{
        alert('Vui lòng điền đầy đú thông tin')
    }
}
function removeProduct(button){
    var id = parseInt(button.id);
    var xhr=  $.ajax({
        url: '/admin/delete/product',
        type: 'post',
        data:{
            _token:$("#csrf").val(),
            id: id,
        },
        success: function (result){
            var dataResult = JSON.parse(result);
            if(dataResult.statusCode===200){
                // window.location = "/admin/add/services";

                alert('Xoá thành công');

            }
            else if(dataResult.statusCode===201){
                alert("Error occured !");
            }
        }
    })
    console.log(xhr);
}
function loadOneProduct(button){
    var id = parseInt(button.id);
    $.ajax({
        url: '/admin/edit/product',
        type: 'get',
        dataType: 'json',
        data:{
            id: id
        },
        success: function (response){
            $('#edit-product-name').val(response['products'][0].product_name);

            $("#edit-short-description").val(response['products'][0].short_description);
            $("#edit-product-id").val(response['products'][0].id)
            $('#edit-app-store-link').val(response['products'][0].apple_link);
            $('#edit-play-store-link').val(response['products'][0].google_link);
            $("#edit_output_image").attr('src',response['products'][0].logo);


        }
    })
}
function editProduct(){
    var product_name = $('#edit-product-name').val().trim();
    var id = $('#edit-product-id').val();
    var google_link = $('#edit-play-store-link').val().trim();
    var apple_link = $('#edit-app-store-link').val().trim();
    var short_description = $('#edit-short-description').val().trim();
    var form = $('#form_edit')[0];
    var form_data = new FormData(form);
    form_data.append('product_name', product_name);
    form_data.append('id',id);
    form_data.append('google_link', google_link);
    form_data.append('apple_link',apple_link);
    form_data.append('short_description', short_description);
    console.log(product_name,id, google_link,apple_link, short_description, $("#csrf").val());

    if(product_name !== ""  && id !== "" && google_link !== "" && apple_link !== "" && short_description !== ""){
       var xhr =  $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/edit/product',
            type: 'post',
            contentType: false,
            processData: false,
            data: form_data,
            success: function (result){
                console.log(result);
                var dataResult = JSON.parse(result);
                if (dataResult.statusCode === 200) {
                    $('p[name="alert_success_edit"]').css("display", "block");
                }
                else if (dataResult.statusCode === 201) {
                    alert("Error Occurred !");
                }

            }
        })
        console.log(xhr);
    }
    else{
            alert('Vui lòng xem lại thông tin nhập vào')
    }


}
