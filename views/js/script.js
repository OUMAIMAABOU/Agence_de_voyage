
       
    

       
       $(document).ready(function()
        {
            $("#agenttable").on('click','.update',function()
            {
                var currentRow=$(this).closest("tr"); 
                $('#id').val(currentRow.find("td:eq(0)").text());
                $('#name').val(currentRow.find("td:eq(3)").text());
                $('#ville').val(currentRow.find("td:eq(5)").text());
                $('#Adresse').val(currentRow.find("td:eq(4)").text());
                $('#Telephone').val(currentRow.find("td:eq(6)").text());
                $('#Prix').val(currentRow.find("td:eq(7)").text());
                $('#Etoile').val(currentRow.find("td:eq(6)").text());
                $('#email').val(currentRow.find("td:eq(8)").text());
        
        
            })
        })



$(document).ready(function()
{
    $("#myTable").on('click','.update',function()
    {
        var currentRow=$(this).closest("tr"); 
        $('#id').val(currentRow.find("td:eq(0)").text());
        $('#name').val(currentRow.find("td:eq(3)").text());
        $('#genre').val(currentRow.find("td:eq(5)").text());
        $('#email').val(currentRow.find("td:eq(4)").text());
        $('#type').val(currentRow.find("td:eq(6)").text());
        $('#password').val(currentRow.find("td:eq(7)").text());
        // $('#adress').val(currentRow.find("td:eq(6)").text());
        $('#phone').val(currentRow.find("td:eq(8)").text());


    })
})


document.querySelectorAll('.confirm-submit').forEach(form=>{
    form.addEventListener('submit',(e)=>{
        if(!confirm(e.target.dataset.confirmMsg)){
            e.preventDefault();
        }
    });
})
// document.querySelectorAll('.confirm-submit').forEach(form=>{
//     form.addEventListener('click',(e)=>{
//         if(!confirm(e.target.dataset.confirmMsg)){
//             e.preventDefault();
//         }
//     });
// })



var el = document.getElementById("dashboard");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
el.classList.toggle("toggled");
};
