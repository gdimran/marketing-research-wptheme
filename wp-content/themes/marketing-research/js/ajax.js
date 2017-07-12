// ajax js

$(function(){
    var $singleBlog=$('#blog-container'),
        $cat_links=$('ul.categories-filtes li a');
   
    $cat_links.on('click', function(e){
        e.preventDefault();
        $el= $(this);
        var value= $el.attr("href");
        $singleBlog.animate({opacity:"0.5"});
        $singleBlog.load(value + "#inside", function(){
            $singleBlog.animate({opacity: "1"});
        });
    });
});