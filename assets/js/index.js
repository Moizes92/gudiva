/**
 * Created by kilenga on 7/18/17.
 */
function swap_pages(type){
    var link ='student_pages/'+type;
    $.ajax({
        url : link,
        dataType : "html",
        success : function(result){
            $('#third-row').html(result);

        }
    });
}