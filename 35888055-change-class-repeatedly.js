// http://stackoverflow.com/questions/35888055/how-to-use-addclass-and-removeclass-repeatedly-on-a-single-element/36281937


var $classes = ['first', 'second', 'third'];

$(function(){
    $('#subject').click(function(){
        current = $(this).find('a:first');
        index = $.inArray(current.attr('class'), $classes);
        if($classes.length > index+1)
            current.removeClass($classes[index]).addClass($classes[index+1])
    });
});

/*
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div id='subject'>
	<a class="first" href="#">Test 1</a>
</div>
*/