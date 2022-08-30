(function($){"use strict";$(document).on('ready',function(){$('.lsvr_event-calendar-widget').each(function(){var $this=$(this),$calendar=$this.find('.lsvr_event-calendar-widget__calendar'),$calendarTitleMonth=$this.find('.lsvr_event-calendar-widget__calendar-title-month'),$calendarTitleYear=$this.find('.lsvr_event-calendar-widget__calendar-title-year'),$dayList=$this.find('.lsvr_event-calendar-widget__day-list'),$prevBtn=$this.find('.lsvr_event-calendar-widget__nav-btn--prev'),$nextBtn=$this.find('.lsvr_event-calendar-widget__nav-btn--next'),instance=$calendar.data('instance-json')?$calendar.data('instance-json'):false,monthNames=$calendar.data('month-names')?$calendar.data('month-names'):[],year=$calendar.data('year')?parseInt($calendar.data('year')):new Date().getFullYear(),monthIndex=$calendar.data('month')?parseInt($calendar.data('month'))-1:new Date().getMonth(),queryTimeout,ajaxParams=false,$temp;var changeMonth=function(year,month){ajaxParams={'instance':instance,'year':year,'month':month};if(false!==ajaxParams&&'undefined'!==typeof lsvr_events_ajax_var){$calendar.addClass('lsvr_event-calendar-widget__calendar--loading');jQuery.ajax({type:'post',dataType:'HTML',url:lsvr_events_ajax_var.url,data:{action:'lsvr-events-ajax-event-calendar-widget',nonce:encodeURIComponent(lsvr_events_ajax_var.nonce),data:ajaxParams},success:function(response){$this.append('<div class="lsvr_event-calendar-widget__calendar-ajax-temp" style="display: none;"></div>');$temp=$this.find('.lsvr_event-calendar-widget__calendar-ajax-temp');$temp.append(response);$dayList.replaceWith($temp.find('.lsvr_event-calendar-widget__day-list'));$temp.remove();$dayList=$this.find('.lsvr_event-calendar-widget__day-list'),$calendar.removeClass('lsvr_event-calendar-widget__calendar--loading')},error:function(){$calendar.removeClass('lsvr_event-calendar-widget__calendar--loading')}})}};$prevBtn.on('click',function(){if(!$calendar.hasClass('lsvr_event-calendar-widget__calendar--loading')){monthIndex=(monthIndex-1)>=0?monthIndex-1:11;$calendarTitleMonth.text(monthNames[monthIndex]);if(11===monthIndex){year=year-1;$calendarTitleYear.text(year)}clearTimeout(queryTimeout);queryTimeout=setTimeout(function(){changeMonth(year,monthIndex+1)},800)}});$nextBtn.on('click',function(){if(!$calendar.hasClass('lsvr_event-calendar-widget__calendar--loading')){monthIndex=(monthIndex+1)<12?monthIndex+1:0;$calendarTitleMonth.text(monthNames[monthIndex]);if(0===monthIndex){year=year+1;$calendarTitleYear.text(year)}clearTimeout(queryTimeout);queryTimeout=setTimeout(function(){changeMonth(year,monthIndex+1)},800)}})});$('.lsvr_event-filter-widget').each(function(){var $this=$(this),$form=$this.find('.lsvr_event-filter-widget__form');if($.fn.datepicker){$this.find('.lsvr_event-filter-widget__input--datepicker').each(function(){var $datepicker=$(this);$datepicker.datepicker({dateFormat:'yy-mm-dd',beforeShow:function(){$('#ui-datepicker-div').addClass('lsvr-datepicker')}});$datepicker.parent().on('click',function(){$datepicker.datepicker('show')})})}})})})(jQuery);