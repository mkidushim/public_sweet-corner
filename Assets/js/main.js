$(document).ready(function() {
    $('.main-nav').affix({
        offset: {
            top: function(){
            	return $('.main-nav').offset().top;
            },
            // bottom:function(){
            // 	return this.bottom;
            // }
            // bottom: function() {
            //     return (this.bottom = $('.footer').outerHeight(true))
            // }
        }
    });
    $('.navbar-toggle-con').affix({
        offset: {
            top: function(){
            	var top = $('.navbar-toggle').height();
            	return top;
            },
            // bottom:function(){
            // 	return this.bottom;
            // }
            // bottom: function() {
            //     return (this.bottom = $('.footer').outerHeight(true))
            // }
        }
    });
    $('.navbar-collapse').affix({
        offset: {
            top: function(){
            	var top = $('.navbar-toggle').height();
            	return top;
            },
            // bottom:function(){
            // 	return this.bottom;
            // }
            // bottom: function() {
            //     return (this.bottom = $('.footer').outerHeight(true))
            // }
        }
    });
});
