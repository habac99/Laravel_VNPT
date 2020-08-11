$(document).ready(function () {

    fetchAll();
    $(".btn.btn-danger.btn_delete").click(function (){
        remove(this);
    })
    $("#edit_fileUpload").change(function() {
        edit_preview(this);
    });
    $("#fileUpload").change(function() {
        upload_preview(this);
    });
    $(".btn.btn-secondary.btn_dismiss").click(function (){

        CKEDITOR.instances['full_description'].setData('');
        $('p[name="alert_success"]').css("display", "none");
        $('#output_image').removeAttr('src');
        $('#form_upload')[0].reset();

    })
    $(".btn.btn-secondary.edit_dismiss").click(function (){
        $('p[name="alert_success_edit"]').css("display", "none");
    })
    $("#btn-upload").click(function () {
        // insert()
        var service_id = $('input[name="service_id"]:checked').val();
        var service_name = $('#service-name').val();
        var short_description = $('#short_description').val();
        var alt_name = $("#alt_name").val();
        var full_description = CKEDITOR.instances['full_description'].getData();
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
                    // window.location = "/admin/add/services";
                    $('p[name="alert_success"]').css("display", "block");
                    // $('p[name="alert_success"]').html('Thêm thành công');

                } else if (dataResult.statusCode === 201) {
                    alert("Error occured !");
                }

            }
            })
             console.log(xhr);
        }
        else{
            alert('Vui lòng điền đầy đú thông tin')
        }
    })
    $("#btn-edit").click(function (){
        // var service_id = $('input[name="service_id"]:checked').val();
        var service_name = $('#edit_service-name').val();
        var short_description = $('#edit_short_description').val();
        // var full_description  = $('textarea[name="summary_ckeditor"]').val();
        var full_description = CKEDITOR.instances['edit_full_description'].getData();
        var alt_name = $("#edit_alt_name").val();
        var form = $('#form_edit')[0];
        var id = $("#edit_service_id").val();
        var form_data = new FormData(form);
        form_data.append('service_name',service_name);
        form_data.append('short_description',short_description);
        form_data.append('full_description',full_description);
        form_data.append('alt_name',alt_name);
        form_data.append('id',id);
        console.log(service_name,alt_name, short_description, full_description, id);
        if(service_name != null && short_description != null &&
            full_description != null && id != null && alt_name != null){
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
                        alert("Error occured !");
                    }

                }


            })
            console.log(xhr);


        }
        else{
            alert('Vui lòng điền đầy đú thông tin')
        }

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
                        "<button type='submit' class='btn btn-info btn-update' data-toggle='modal' data-target='#edit_form' data-backdrop='static' " + "id='" + id +  "'>" + 'Sửa' + "</button>" +
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
                // remove(this);
                console.log(this.id);
                $(".btn.btn-danger.btn_delete").attr('id',this.id);
            })


            setTimeout(fetchAll, 5000);

        }
    })


}
// $(".btn.btn-info").click(function (){
//     alert('clicked');
//     // abc(this);
// })
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
// $("#edit_fileUpload").change(function() {
//     preview(this);
// });
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
function remove(button){
    console.log(typeof button.id);
    var id = parseInt(button.id);
    console.log(typeof id);
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
