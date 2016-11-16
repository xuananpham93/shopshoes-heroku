<!-- rating -->
<script language="javascript" type="text/javascript">
    $(function() {
        $("#rating_star").codexworld_rating_widget({
            starLength: '5',
            initialValue: '5',
            callbackFunctionName: 'processRating',
            imageDirectory: 'images',
            inputAttr: 'postID'
        });
    });

    function processRating(val, attrVal){
        $.ajax({
            type: 'POST',
            url: '<?php echo DOMAIN ?>rating',
            data: 'postID='+attrVal+'&ratingPoints='+val,
            dataType: 'json',
            success : function(data) {
                if (data.status == 'ok') {
                    alert('You have rated '+val+' to CodexWorld');
                    $('#avgrat').text(data.average_rating);
                    $('#totalrat').text(data.rating_number);
                }else{
                    alert('Some problem occured, please try again.');
                }
            }
        });
    }
</script>
<style type="text/css">
    .overall-rating{font-size: 14px;margin-top: 5px;color: #8e8d8d;}
</style>

<input name="rating" value="0" id="rating_star" type="hidden" postID="1" />

<!-- <div class="overall-rating">
    (Average Rating <span id="avgrat"><?php echo $ratingRow['average_rating']; ?></span>
    Based on <span id="totalrat"><?php echo $ratingRow['rating_number']; ?></span>  rating)</span>
</div> -->

<script>
    (function(a){
        a.fn.codexworld_rating_widget = function(p){
            var p = p||{};
            var b = p&&p.starLength?p.starLength:"5";
            var c = p&&p.callbackFunctionName?p.callbackFunctionName:"";
            var e = p&&p.initialValue?p.initialValue:"0";
            var d = p&&p.imageDirectory?p.imageDirectory:"images";
            var r = p&&p.inputAttr?p.inputAttr:"";
            var f = e;
            var g = a(this);
            b = parseInt(b);
            init();
            g.next("ul").children("li").hover(function(){
                $(this).parent().children("li").css('background-position','0px 0px');
                var a = $(this).parent().children("li").index($(this));
                $(this).parent().children("li").slice(0,a+1).css('background-position','0px -28px')
            },function(){});
            g.next("ul").children("li").click(function(){
                var a = $(this).parent().children("li").index($(this));
                var attrVal = (r != '')?g.attr(r):'';
                f = a+1;
                g.val(f);
                if(c != ""){
                    eval(c+"("+g.val()+", "+attrVal+")")
                }
            });
            g.next("ul").hover(function(){},function(){
                if(f == ""){
                    $(this).children("li").slice(0,f).css('background-position','0px 0px')
                }else{
                    $(this).children("li").css('background-position','0px 0px');
                    $(this).children("li").slice(0,f).css('background-position','0px -28px')
                }
            });
            function init(){
                $('<div style="clear:both;"></div>').insertAfter(g);
                g.css("float","left");
                var a = $("<ul>");
                a.addClass("codexworld_rating_widget");
                for(var i=1;i<=b;i++){
                    a.append('<li style="background-image:url('+'<?php echo DOMAIN ?>'+'/widget_star.gif)"><span>'+i+'</span></li>')
                }
                a.insertAfter(g);
                if(e != ""){
                    f = e;
                    g.val(e);
                    g.next("ul").children("li").slice(0,f).css('background-position','0px -28px')
                }
            }
        }
    })(jQuery);
</script>