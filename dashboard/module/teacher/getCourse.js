function ajaxRequestToGetCourse()
{
    var info = {
        course: $('#myclass').val()
        
    };

    $.ajax({
        url: 'selectCourse.php',
        data: info,
        success: function(response){
            $('#mycourse').html(response);
            // ajaxRequestToGetCourseStudentSection();
        },
        error: function (xmlHttpRequest, textStatus, errorThrown) {
         alert(errorThrown);
    }
    });
}
function ajaxRequestToGetSchedule()
{
    var info = {
        class: $('#myclass').val()
        
    };

    $.ajax({
        url: 'getSchedule.php',
        data: info,
        success: function(response){
            $('#myschedule').html(response);
            // ajaxRequestToGetCourseStudentSection();
        },
        error: function (xmlHttpRequest, textStatus, errorThrown) {
         alert(errorThrown);
    }
    });
}