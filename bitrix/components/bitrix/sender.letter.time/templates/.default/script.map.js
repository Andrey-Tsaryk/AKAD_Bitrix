{"version":3,"sources":["script.js"],"names":["BX","namespace","Sender","Letter","Time","Page","Helper","this","context","prototype","init","params","containerId","actionUri","isFrame","isSaved","isOutside","canEdit","isSupportReiterate","prettyDateFormat","mess","atTime","defered","selectorNode","getNode","inputNode","bind","showMenu","slider","close","parent","UI","Notification","Center","notify","content","outsideSaveSuccess","autoHideDelay","scheduleNodes","daysOfMonth","daysOfWeek","timesOfDay","monthsOfYear","schedule","Schedule","caller","value","date","parseDate","setFormattedDate","setText","textContent","initButtons","onPopupClose","onClick","id","popupMenu","showCalendar","show","item","getMenuItem","text","onTimeSet","now","Date","format","convertBitrixFormat","message","ampm","isAmPmMode","tmpBeg","tmpEnd","onPopupItemEnter","calendar","get","Close","node","bTime","bHideTime","callback","callback_after","items","time","push","forEach","onclick","events","onMouseEnter","PopupMenu","create","autoHide","offsetLeft","angle","position","offset","popup","activeClassName","timesOfDayNode","daysOfMonthNode","daysOfWeekNodes","getNodes","selectWeekDay","isAdd","indexOf","getAttribute","changeClass","daysOfMonthNodes","split","util","in_array","monthsOfYearNodes","additionalNode","additionalBtnNode","showAdditional","length","display","change","PopupWindowManager","lightShadow","width","closeByEsc","contentColor","buttons","PopupWindowButton","accept","className","click","onApply","isShown","toggleClass","getTime","days","getSelectedNames","additional","month","day","getString","scheduleText","replace","scheduleTextMo","getSelectedNodes","list","filter","hasClass","getSelectedValues","map","getSelectedValuesString","join","trim","window"],"mappings":"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","file":"script.map.js"}