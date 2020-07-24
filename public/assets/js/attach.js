$(function() {
	count();
	if($('.fed-jump-info').attr('data-msg')) {
		setTimeout(function() {
			location.href = $('#href').attr('href');
		}, 3000);
		after(3);
	}
});

function after(i) {
	if(i < 0) return false;
	$('.fed-jump-tips span').empty().append(i);
	i = i - 1;
	setTimeout(function() {
		after(i);
	}, 1000);
}

function count() {
	$('.fed-time-down').each(function() {
		var endtime = new Date($(this).attr('endtime')).getTime();
		var nowtime = new Date().getTime();
		var oddtime = endtime - nowtime;
		var seconds = oddtime / 1000;
		var minutes = Math.floor(seconds / 60);
		var hours = Math.floor(minutes / 60);
		if(endtime <= nowtime) {
			$(this).html('<li><div>请稍候</div></li>');
		} else {
			var html = '';
			html += '<li><span>' + cover(Math.floor(hours / 24)) + '</span><div>days</div></li>';
			html += '<li><span>' + cover(hours % 24) + '</span><div>hrs</div></li>';
			html += '<li><span>' + cover(minutes % 60) + '</span><div>min</div></li>';
			html += '<li><span>' + cover(Math.floor(seconds % 60)) + '</span><div>sec</div></li>';
			$(this).html(html);
		}
	});
	setTimeout('count()', 1000);
}

function cover(num) {
	return num < 10 ? '0' + num : num;
}