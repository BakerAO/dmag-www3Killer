var dMagazine = function($){
	
	var MouseState = false;
	
	function formEvent(){
		$('#q').focus(function(){
			$(this).val('');
		});
	}
	
	return {
		init : function(time){
			formEvent();
			
		}
	}
}(jQuery);

// Check width of element:
$.extend($.expr[':'],{
    width: function(a,i,m) {
        if(!m[3]||!(/^(<|>)\d+$/).test(m[3])) {return false;}
        return m[3].substr(0,1) === '>' ? 
                 $(a).width() > m[3].substr(1) : $(a).width() <= m[3].substr(1);
    }
});

jQuery(document).ready(function() {
	dMagazine.init('3500');
});


(function (tos) {
  window.setInterval(function () {
    totalTos += 10;
    if (totalTos <= 600){	
    tos = (function (t) {
      return t[0] == 50 ? (parseInt(t[1]) + 1) + ':00' : (t[1] || '0') + ':' + (parseInt(t[0]) + 10);
    })(tos.split(':').reverse());
    window.pageTracker ? pageTracker._trackEvent('Time', 'Log', tos) : _gaq.push(['_trackEvent', 'Time', 'Log', tos]);
    }
  }, 10000);
})('00');
var totalTos = 0;


$.getScript = function(url, callback, cache){
	$.ajax({
			type: "GET",
			url: url,
			success: callback,
			dataType: "script",
			cache: cache
	});
};