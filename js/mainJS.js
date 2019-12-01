var forismaticAPI = 'https://api.forismatic.com/api/1.0/?method=getQuote&format=jsonp&lang=en&jsonp=?';
$(document).ready(function() {
    do
    {
	    $('#btn-quote').on("click", function() {
	        $.getJSON(forismaticAPI, function(data) {
	            $('#quote-text').empty();           
	            $('#quote-text').append('<blockquote>' + data.quoteText + '</blockquote>' + '<p id="author"> —  ' + data.quoteAuthor + '</p>');
	        });
	    });
	}
	while (data.quoteText.length>140);
});