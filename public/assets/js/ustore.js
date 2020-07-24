var store;
$(function() {
        if (store.enabled) {
            var histemp = store.get('history')? store.get('history'): [];
			//console.log(histemp)
            if(histemp.length == 0) {
                $("#top-history-list").html('<li><a href="javascript:;">暂无播放记录</a></li>');
            } else {
                $("#top-history-list").html("");
                for(var i=0; i<histemp.length; i++) {
					var types = histemp[i].types;
                    switch(types) {
                        case 'vod-m':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'play/m_'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">源'+histemp[i].episode+'</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
                
                        case 'vod-tv':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'play/tv_'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">第'+histemp[i].episode+'集</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
                        
                        case 'vod-ct':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'play/ct_'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">第'+histemp[i].episode+'集</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
                        
                        case 'vod-va':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'play/va_'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">'+histemp[i].episode+'</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
                        
                        case 'wplay':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'wplay/'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">'+histemp[i].episode+'</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
                        
                        case 'dplay':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'dplay/'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">'+histemp[i].episode+'</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
						
						case 's-mv':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'splay/'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">源'+histemp[i].episode+'</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
						
						case 's-tv':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'splay/'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">第'+histemp[i].episode+'集</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
						
						case 'tvlive':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'tvplay/'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'【直播】</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">源'+histemp[i].episode+'</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
						
						
						case 'wdu':
                            $("#top-history-list").append(
					            '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" href="'+window.globalConfig.siteUrl+'wdu/pptv/'+histemp[i].id+'.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">'+histemp[i].name+'</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3">'+histemp[i].episode+'</span>'+
					                '</a>'+
				                '</li>'
					        );
                        break;
                    }
				
                }
              
               $("#top-history-list").append(
                                '<li class="wdu-part-rows wdu-line-bottom">'+
				                    '<a class="wdu-part-rows" target="_blank" href="'+window.globalConfig.siteUrl+'u/history.html">'+
					                    '<span class="wdu-part-eone wdu-col-xs9"><span class="wdu-text-muted">查看更多</span></span>'+
						                '<span class="wdu-part-eone wdu-text-muted wdu-text-right wdu-col-xs3"></span>'+
					                '</a>'+
				                '</li>'
               );
            }
            
        }



})

function clearHistory() {

    store.remove('history');
    $("body").click();
	$("#top-history-list").html('<li><a href="javascript:;">暂无播放记录</a></li>');
    layer.msg("播放记录已清空");
}

function urlEncode(String) {
    return encodeURIComponent(String).replace(/'/g,"%27").replace(/"/g,"%22");	
}

//

  $(document).ready(function () {
	if("ActiveXObject" in window){
     alert("(⊙o⊙)…请更换chrome或火狐等现代浏览器以获得本站的最佳体验！");
}
  })

