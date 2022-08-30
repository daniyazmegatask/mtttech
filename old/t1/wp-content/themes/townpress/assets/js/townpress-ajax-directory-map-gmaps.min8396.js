(function($){"use strict";$(document).ready(function(){if($.fn.lsvrTownpressDirectoryMapGmaps){$('.lsvr_listing-map--gmaps #lsvr_listing-map__canvas').each(function(){$(this).lsvrTownpressDirectoryMapGmaps()})}});if(!$.fn.lsvrTownpressDirectoryMapGmaps){var lsvrTownpressDirectoryMapGmapsAjaxRequest;var lsvrTownpressDirectoryMapGmapsMethods={init:function(){if($.fn.lsvrTownpressLoadGoogleMapsApi){$.fn.lsvrTownpressLoadGoogleMapsApi()}var $this=$(this),mapType=$this.data('maptype')?$this.data('maptype'):'terrain',zoom=$this.data('zoom')?$this.data('zoom'):17,enableMouseWheel=$this.data('mousewheel')&&true===String($this.data('mousewheel'))?true:false,elementId=$this.attr('id'),query=$this.data('query')?$this.data('query'):{};var apiSetup=function(){switch(mapType){case 'roadmap':mapType=google.maps.MapTypeId.ROADMAP;break;case 'satellite':mapType=google.maps.MapTypeId.SATELLITE;break;case 'hybrid':mapType=google.maps.MapTypeId.HYBRID;break;default:mapType=google.maps.MapTypeId.TERRAIN}var mapOptions={'zoom':zoom,'mapTypeId':mapType,'scrollwheel':enableMouseWheel};if('undefined'!==typeof lsvr_townpress_google_maps_style_json){mapOptions.styles=JSON.parse(lsvr_townpress_google_maps_style_json)}else if('undefined'!==typeof lsvr_townpress_google_maps_style){mapOptions.styles=lsvr_townpress_google_maps_style}else{mapOptions.styles=[{featureType:'poi',stylers:[{visibility:'off'}]}]}var map=new google.maps.Map(document.getElementById(elementId),mapOptions);$this.data('map',map);var mapMarkers=[];$this.data('mapMarkers',mapMarkers);var mapMarkerClusterer=false;$this.data('mapMarkerClusterer',mapMarkerClusterer);$this.lsvrTownpressDirectoryMapGmaps('ajaxRequest',query)};if('object'===typeof google&&'object'===typeof google.maps){apiSetup()}else{$(document).on('lsvrTownpressGoogleMapsApiLoaded',function(){apiSetup()})}},update:function(query){if(typeof query!=='undefined'){this.lsvrTownpressDirectoryMapGmaps('ajaxRequest',query)}},ajaxRequest:function(query){if(typeof query!='undefined'){var $this=this;if(typeof lsvr_townpress_ajax_directory_map_var!=='undefined'){if('undefined'!==typeof lsvrTownpressDirectoryMapGmapsAjaxRequest){lsvrTownpressDirectoryMapGmapsAjaxRequest.abort()}lsvrTownpressDirectoryMapGmapsAjaxRequest=jQuery.ajax({type:'post',dataType:'JSON',url:lsvr_townpress_ajax_directory_map_var.url,data:{action:'lsvr-townpress-ajax-directory-map',nonce:encodeURIComponent(lsvr_townpress_ajax_directory_map_var.nonce),query:query},success:function(response){$this.lsvrTownpressDirectoryMapGmaps('refresh',response)}})}}},refresh:function(response){if(typeof google==='object'&&typeof google.maps==='object'&&this.data('map')&&this.data('mapMarkers')){var $this=this,map=$this.data('map'),mapMarkers=$this.data('mapMarkers'),mapMarkerClusterer=$this.data('mapMarkerClusterer');var responseLocations=response.hasOwnProperty('locations')?response.locations:false,responseLabels=response.hasOwnProperty('labels')?response.labels:false,markerclusterpath=response.hasOwnProperty('markerclusterpath')?response.markerclusterpath:false;if(false!==responseLocations){var refreshMap=function(){if(responseLocations.length>0){if(1===responseLocations.length&&responseLocations[0].hasOwnProperty('latitude')&&responseLocations[0].hasOwnProperty('longitude')){map.setOptions({center:new google.maps.LatLng(responseLocations[0].latitude,responseLocations[0].longitude)})}var infoboxOptions={content:'',disableAutoPan:false,maxWidth:0,pixelOffset:new google.maps.Size(-140,5),zIndex:null,boxStyle:{width:'280px'},closeBoxMargin:'10px 2px 2px 2px',closeBoxURL:'',infoBoxClearance:new google.maps.Size(1,1),visible:true,pane:'floatPane',enableEventPropagation:false};var infoBox=new InfoBox(infoboxOptions),infoBoxCloseHandle=false;google.maps.event.addListener(infoBox,'domready',function(){infoBoxCloseHandle=google.maps.event.addListener(map,'click',function(){infoBox.close();google.maps.event.removeListener(infoBoxCloseHandle)})});var bounds=new google.maps.LatLngBounds();for(var i=0;i<mapMarkers.length;i+=1){mapMarkers[i].setMap(null)}mapMarkers=[];for(var i=0;i<responseLocations.length;i+=1){if(responseLocations[i].hasOwnProperty('latitude')&&responseLocations[i].hasOwnProperty('longitude')){if('function'===typeof RichMarker&&responseLocations[i].hasOwnProperty('thumburl')){mapMarkers[i]=new RichMarker({position:new google.maps.LatLng(responseLocations[i].latitude,responseLocations[i].longitude),map:map,shadow:'none',content:'<div class="lsvr_listing-map__marker lsvr_listing-map__marker--has-thumb lsvr_listing-map__marker--id-'+responseLocations[i].id+'"><div class="lsvr_listing-map__marker-inner lsvr_listing-map__marker-inner--has-thumb" style="background-image: url(\''+responseLocations[i].thumburl+'\');"></div></div>'})}else{mapMarkers[i]=new RichMarker({position:new google.maps.LatLng(responseLocations[i].latitude,responseLocations[i].longitude),map:map,shadow:'none',content:'<div class="lsvr_listing-map__marker lsvr_listing-map__marker--id-'+responseLocations[i].id+'"><div class="lsvr_listing-map__marker-inner"></div></div>'})}$this.data('mapMarkers',mapMarkers);var boxHtml='';if(responseLocations[i].hasOwnProperty('thumburl')){boxHtml+='<div class="lsvr_listing-map__infobox lsvr_listing-map__infobox--has-thumb">'}else{boxHtml+='<div class="lsvr_listing-map__infobox">'}boxHtml+='<div class="lsvr_listing-map__infobox-inner">';if(responseLocations[i].hasOwnProperty('thumburl')&&responseLocations[i].hasOwnProperty('permalink')){boxHtml+='<a href="'+responseLocations[i].permalink+'" class="lsvr_listing-map__infobox-thumb" style="background-image: url( \''+responseLocations[i].thumburl+'\' ); "></a>'}if(responseLocations[i].hasOwnProperty('title')&&responseLocations[i].hasOwnProperty('permalink')){boxHtml+='<h4 class="lsvr_listing-map__infobox-title">';boxHtml+='<a href="'+responseLocations[i].permalink+'" class="lsvr_listing-map__infobox-title-link">'+responseLocations[i].title;boxHtml+='</a></h4>'}if(responseLocations[i].hasOwnProperty('address')){boxHtml+='<p class="lsvr_listing-map__infobox-address">'+responseLocations[i].address.replace(/(?:\r\n|\r|\n)/g,'<br>')+'</p>'}if(responseLocations[i].hasOwnProperty('category')&&'undefined'!==typeof responseLabels.marker_infowindow_cat_prefix){var categoryHtml='';for(var j=0;j<responseLocations[i].category.length;j+=1){if(responseLocations[i].category[j].hasOwnProperty('name')&&responseLocations[i].category[j].hasOwnProperty('url')){categoryHtml+='<a href="'+responseLocations[i].category[j].url+'" class="lsvr_listing-map__infobox-category-link">'+responseLocations[i].category[j].name+'</a>';if(j<responseLocations[i].category.length-1){categoryHtml+=', '}}}boxHtml+='<p class="lsvr_listing-map__infobox-category">'+responseLabels.marker_infowindow_cat_prefix.replace('%s',categoryHtml)+'</p>'}if('undefined'!==typeof responseLabels.marker_infowindow_more_link&&responseLocations[i].hasOwnProperty('permalink')){boxHtml+='<p class="lsvr_listing-map__infobox-more"><a href="'+responseLocations[i].permalink+'" class="lsvr_listing-map__infobox-more-link">'+responseLabels.marker_infowindow_more_link+'</a></p>'}boxHtml+='</div></div>';mapMarkers[i].infoboxContent=boxHtml;google.maps.event.addListener(mapMarkers[i],'click',function(){infoBox.close();if(false!==infoBoxCloseHandle){google.maps.event.removeListener(infoBoxCloseHandle)}infoBox.setContent(this.infoboxContent);infoBox.open(map,this)});if(responseLocations.length>1){bounds.extend(mapMarkers[i].position)}}}if(typeof MarkerClusterer==='function'){if(false!==mapMarkerClusterer){mapMarkerClusterer.clearMarkers()}var cluster_styles=[{width:58,height:58,url:markerclusterpath+'markercluster1.png',textColor:'white',textSize:12},{width:58,height:58,url:markerclusterpath+'markercluster2.png',textColor:'white',textSize:12},{width:58,height:58,url:markerclusterpath+'markercluster3.png',textColor:'white',textSize:12},{width:58,height:58,url:markerclusterpath+'markercluster4.png',textColor:'white',textSize:12},{width:58,height:58,url:markerclusterpath+'markercluster5.png',textColor:'white',textSize:12}];mapMarkerClusterer=new MarkerClusterer(map,mapMarkers,{styles:cluster_styles});$this.data('mapMarkerClusterer',mapMarkerClusterer)}if(responseLocations.length>1){map.fitBounds(bounds)}$this.removeClass('lsvr_listing-map__canvas--loading');$this.parent().find('.lsvr_listing-map__spinner').remove()}};refreshMap()}else{$this.parent().hide()}}}};$.fn.lsvrTownpressDirectoryMapGmaps=function(method){if(lsvrTownpressDirectoryMapGmapsMethods[method]){return lsvrTownpressDirectoryMapGmapsMethods[method].apply(this,Array.prototype.slice.call(arguments,1))}else{return lsvrTownpressDirectoryMapGmapsMethods.init.apply(this,arguments)}}}})(jQuery);