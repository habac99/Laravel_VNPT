$(document).ready(function () {

    fetchAll();
    $("#btn-upload").click(function () {
        // insert()
        var service_id = $('input[name="service_id"]:checked').val();
        var service_name = $('#service-name').val();
        var short_description = $('#short_description').val();
        // var full_description  = $('textarea[name="summary_ckeditor"]').val();
        var full_description = CKEDITOR.instances['full_description'].getData();
        var form = $('#form_upload')[0];
        var form_data = new FormData(form);
        form_data.append('service_id',service_id);
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

            // data: {
            //     // _token: $("#csrf").val(),
            //     service_id: service_id,
            //     service_name: service_name,
            //     short_description: short_description,
            //     full_description: full_description,
            // },
                data:form_data,
                processData: false,
                contentType: false,
            success: function (result) {
                console.log(result);
                var dataResult = JSON.parse(result);
                if (dataResult.statusCode == 200) {
                    // window.location = "/admin/add/services";
                    $('p[name="alert_success"]').css("display", "block");
                    $('p[name="alert_success"]').html('Thêm thành công');

                } else if (dataResult.statusCode == 201) {
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
                        "<button type='submit' class='btn btn-info btn-update'" + "id='" + id + "'>" + 'Sửa' + "</button>" +
                        "<button type='submit' class='btn btn-danger btn-remove' " + "id='" + id + "'>" + 'Xoá' + "</button>" +
                        "</td>" +
                        "<td style='display: none" + id + "td>"
                    "</tr>";

                    $("#serviceTable tbody").append(tr_str);
                }

            }
            $(".btn.btn-info.btn-update").click(function (){
                // alert('clicked');
                update(this);
            })
            $(".btn.btn-danger.btn-remove").click(function (){
                remove(this);
            })


            setTimeout(fetchAll, 5000);

        }
    })


}
// $(".btn.btn-info").click(function (){
//     alert('clicked');
//     // abc(this);
// })
function update(button) {
    console.log(button.id);
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
            if(dataResult.statusCode==200){
                // window.location = "/admin/add/services";

                alert('Xoá thành công');

            }
            else if(dataResult.statusCode==201){
                alert("Error occured !");
            }
        }
    })
    console.log(xhr);
}
