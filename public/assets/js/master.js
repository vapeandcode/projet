$(function(){
    // valide le formulaire de droite
    $("#addArticle").on("submit",function(e) {
        e.preventDefault();
        console.log("fff");
        var form=document.getElementById('addArticle');
        var data = new FormData(form);

        console.log(data);
        $.ajax({
            url: "/admin/add_article/",
            type:"post",
            data: data,
            dataType:"json",
            processData:false,
            contentType:false,
        });

    });
});
