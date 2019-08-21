
$(document).ready(function(){


  $(document).on('click', '.view_data', function(){
    var sid = $(this).attr("id");
    if(sid != ''){
      $.ajax({
        url:"student_detail",
        method:"GET",
        data:{studentId : sid},
        success:function(data){
          var result = '';
          result = "<table class='table table-sm table-striped'>"+
                      "<tbody>"+
                        "<tr>"+
                          "<td width='35%'class='text-right'>Student Id:</td>"+
                          "<td width='65%'>"+ data[0].studentId +"</td>"+
                        "</tr>"+
                        "<tr>"+
                          "<td width='35%' class='text-right'>Student Name:</td>"+
                          "<td width='65%'>"+ data[0].studentName +"</td>"+
                        "</tr>"+
                        "<tr>"+
                          "<td width='35%' class='text-right'>Student Email:</td>"+
                          "<td width='65%'>"+ data[0].studentEmail +"</td>"+
                        "</tr>"+
                        "<tr>"+
                          "<td width='35%' class='text-right'>Student Email:</td>"+
                          "<td width='65%'>"+ data[0].studentReview +"</td>"+
                        "</tr>"+
                      "</tbody>"+
                    "</table>";
          $('#student_detail').html(result);
          $('#viewStudent').modal('show');
        }
      });
    }
  });

  $(document).on('click', '.delete_data', function(event){
    event.preventDefault();
    if(confirm("Do you want to delete this?")){
      var sid = $(this).attr("id");
      console.log(sid);

      if(sid != ''){
        $.ajax({
          url:"delete_student",
          method:"GET",
          data:{studentId : sid},
          success:function(data){
            var result = '';
            result ="<div id='msg' class='modal fade message'>"+
              "<div class='modal-dialog'>"+
                "<div class='modal-content'>"+

                  "<div class='modal-header justify-content-center py-2'>"+
                    "<h6 class='modal-title'>"+data.message+"</h6>"+
                  "</div>"+
                  "<div class='modal-footer py-0'>"+
                    "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>"+
                  "</div></div></div></div>"+
                  "<div class='userList mt-3'>"+
                "<h5 class='text-center py-2 text-white my-0'>Student List</h5>"+
                "<table class='table table-sm table-bordered table-hover'>"+
                  "<thead>"+
                    "<tr class='text-center'>"+
                      "<th width='4%'>#</th>"+
                      "<th width='15%'>Student Id</th>"+
                      "<th width='25%'>Student Name</th>"+
                      "<th width='25%'>Student Email</th>"+
                      "<th width='6%'>View</th>"+
                      "<th width='6%'>Edit</th>"+
                      "<th width='7%'>Delete</th>"+
                    "</tr>"+
                  "</thead>"+
                  "<tbody>";

                  for(var i=0; i < data.studentList.length; i++){

                    result += "<tr class='text-center'>"+
                      "<td>"+ data.studentList[i].id +"</td>"+
                      "<td>"+ data.studentList[i].studentId +"</td>"+
                      "<td>"+ data.studentList[i].studentName +"</td>"+
                      "<td>"+ data.studentList[i].studentEmail +"</td>"+
                      "<td><input type='button' name='view' value='View' id='"+data.studentList[i].studentId+"' class='btn btn-primary btn-sm view_data table_btn' ></td>"+
                      "<td><input type='button' name='edit' value='Edit' id='"+data.studentList[i].studentId+"' class='btn btn-primary btn-sm edit_data table_btn' ></td>"+
                      "<td><input type='button' name='delete' value='Delete' id='"+data.studentList[i].studentId+"' class='btn btn-primary btn-sm delete_data table_btn' ></td>"+
                    "</tr>";
                    }
                  result += "</tbody>"+
                "</table>"+
              "</div>";

            $('#data').html(result);
            $('#msg').modal('show');

          }
        });
      }
    }else {
      return false;
    }

  });

});
