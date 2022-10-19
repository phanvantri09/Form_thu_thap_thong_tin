$('.btnDelete').click(function(ev) {
    ev.preventDefault();
    var _href = $(this).attr('href');
    $('form#formDelete').attr('action', _href);
    if (confirm('Do you want delete?')) {
        $('form#formDelete').submit();
    }
})
$(document).ready(function(){

    // code to read selected table row cell data (values).
    $("#test").on('click','.btnSelect',function(){
         // get the current row
         var currentRow=$(this).closest("select"); 
         
         var col1=currentRow.find("option1").text(); // get current row 1st TD value
        //  var col2=currentRow.find("td:eq(1)").text(); // get current row 2nd TD
        //  var col3=currentRow.find("td:eq(2)").text(); // get current row 3rd TD
         //var data=col1+"\n"+col2+"\n"+col3;
         var data=col1;
         alert(data);
    });
});