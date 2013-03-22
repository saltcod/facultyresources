/*
 * Memorial University Builder Template Functions
 * Version: 2.0
 *
 * Copyright 2011, Memorial University
 * Author Dale Conway
 *
 * These script are used for interaction and binding to elements on Memorial's pages.
 *
 * All the functions (except toggleQlContent wrapper function) are created using object literal notation, as there was no need for multiple objects.
 *
 */
 
/*  Wrapper for quicklinks  */
function toggleQlContent(obj){
    return quickLinks.toggle('#' + obj.id);
}


/* Iterator to handle message iteration over search box. Started by calling searchMessageIterator.init */
searchMessageIterator  = {

    messages : ['Search MUN pages','Find a person','Yaffle our research ','Search the Library','Digital Archives Initiative','Search departments'],
    fadeEffectInterval: 500,
    fadeOutInPauseInterval: 1,
    /* should be at least (2*fadeInOutEffectInterval)+faceOutInPauseInteval */
    loopInterval : 5000,
    domContainer: '#pseudosearchtextinner',

    messageTimer: null,
    position : 1,
    firstMessage: null,

    /* Sets the interval for the time between fadeout and fadein */
    fadeAfter: function(){
        setTimeout(function(){
            searchMessageIterator.fade();
        },this.fadeOutInPauseInterval);
    },

    fade: function(){
        $(this.domContainer).html(this.messages[this.position]);
        this.position++;
        $(this.domContainer).fadeIn(this.fadeEffectInterval);
    },

    iterate: function(){
        if (this.position >= this.messages.length){
            this.position = 0;
        }
        $(this.domContainer).fadeOut(this.fadeEffectInterval,function(){
            searchMessageIterator.fadeAfter();
        });
    },

    init: function(){
        $(this.domContainer).html(this.messages[0]);
        this.start();
    },

    start: function(){
        this.messageTimer = setInterval(function(){
            searchMessageIterator.iterate();
        },this.loopInterval);
    },

    stop: function(){
        clearInterval(this.messageTimer);
    }

}

/* Object to handle multisearch dropdown. Start by calling multiSearch.init(searchMessageIterator,   */
multiSearch = {

    searchTypeId:  '#searchtype',
    searchFormId: '#multisearch_form',
    searchTextOverlayId: '#pseudosearchtext',
    searchTextOverlayInnerId: '#pseudosearchtextinner',
    searchErrorId: '#searchError',

   
    searchTextInputId: '#searchtext',
    searchDropDownContainer: '#searchDropDown',
    defaultSearchString: '',
    slideEffectDuration: 300,
    hideOptionsDelayedStart: 800,

    searchMessageIteratorObject: null,
    searchBoxTimer : null,
    searchError: false,

    searchButtonBindings: {
        'default' :0,
        'search_mun_button' :0,
        'search_people_button': 1,
        'search_yaffle_button': 2,
        'search_lc_button': 3,
        'search_da_button': 4,
        'search_department_button': 5,
        'search_go_button' : 0

    },

    buttonBindingsOnSubmitHandler : function(searchtypeElement){
        searchType = this.searchButtonBindings[searchtypeElement];
        $(this.searchTypeId).val(searchType);
        $(this.searchFormId).submit();

    },

    hideSearchOptionsDelayedStart: function (){
        this.searchBoxTimer = setTimeout(function(){
            multiSearch.hideSearchOptions();
        },this.hideOptionsDelayedStart);
    },

    hideSearchOptions: function(){
        clearTimeout(this.searchBoxTimer);
        $(this.searchDropDownContainer).slideUp(this.slideEffectDuration);
        if (!this.searchError){
            if ($(this.searchTextInputId).val() == this.defaultSearchString){
                this.searchMessageIteratorObject.start();
                this.showTextOverlay(true);
                $(this.searchErrorId).hide();
            }
        }else{
            $(this.searchErrorId).fadeIn(200);
            this.searchError = false;
        }
    },

    showTextOverlay: function(show){
        if (show){
            $(this.searchTextOverlayId).css('display','block');
        }else{
            $(this.searchTextOverlayId).css('display','none');
            $(this.searchTextInputId).focus();
        }

    },


    onSubmitHandler: function(){
        if ($(this.searchTextInputId).val() == this.defaultSearchString){
            this.searchError = true;
            $(this.searchTextInputId).blur();
            return false;
        }
        return true;
    },

    showSearchOptions: function(){
        $(this.searchDropDownContainer).slideDown(this.slideEffectDuration);
        this.searchMessageIteratorObject.stop();
    },

    init: function(smIo){
        this.searchMessageIteratorObject  = smIo;
        $(this.searchTextInputId).val(this.defaultSearchString);
        $(this.searchTypeId).val(0);
        $(this.searchTextInputId).attr('autocomplete','off');
        this.bind();
    },

    bind: function(){

        for (i in this.searchButtonBindings){
            $('#' + i).click(function() {
                multiSearch.buttonBindingsOnSubmitHandler($(this).attr('id'));
                return false;
            });
        }

        $(this.searchFormId).submit(function(){
            return multiSearch.onSubmitHandler();
        });

        $(this.searchTextInputId).blur(function(){
            multiSearch.hideSearchOptionsDelayedStart();
        });

        $(this.searchTextInputId).focus(function(){
            multiSearch.showSearchOptions();
        });

        $(this.searchTextOverlayId).click(function(){
            multiSearch.showTextOverlay(false);
        })

        $(this.searchErrorId).click(function(){
            $(multiSearch.searchErrorId ).hide();
            multiSearch.showTextOverlay(false);
        });
    }

}


/* Object to handle quicklinks . More docs need but buttons and associated content should be related vis contentSuffix,   */

quickLinks = {

    ddbId : '#dropdownBottom',
    contentSuffix : '-content',
    currentClass: 'current',

    buttons: {
        'ql': '#tnql-quicklinks',
        'explorecampus': '#tnql-exploreourcampuses',
	'become': '#tnql-becomestudent',
	'careers': '#tnql-careers'
    },
    
    callbacks: {},

    init: function(){
      for (i in this.callbacks){
          $(this.buttons[i]  + this.contentSuffix).html(this.callbacks[i]());
      } 
    },

    bindCallback: function(id,f){
      this.callbacks[id] = f;  
    },

    toggle: function(id){
        $(this.ddbId).height('auto');
        var elementFound = false;
        for (i in this.buttons){
            if (this.buttons[i] == id){
                elementFound = true
                $(this.buttons[i] + this.contentSuffix).toggle();
                if ($(this.buttons[i] + this.contentSuffix).css('display') == 'block'){
                    $(this.ddbId).show();
                    $(this.buttons[i]).addClass(this.currentClass);
                }else{
                    $(this.ddbId).hide();
                    $(this.buttons[i]).removeClass(this.currentClass);
                }
            }else{
                $(this.buttons[i]).removeClass(this.currentClass);
                $(this.buttons[i] + this.contentSuffix).css('display','none');
            }
        }
        return !elementFound;
    }
}

/* Object to handle the campus side map. Start by calling campusSideMap.init...   */

campusSideMap = {
    classArray: ['.campusFlashToolTip','.campusFlashClose','.campusFlashView'],
    cFButtonClass : '.campusFlashButton',
    cFCloseClass :  '.campusFlashClose',
    hide: function(){
        for (i in this.classArray){
            $(this.classArray[i]).hide();
            return false;
        }
    },
    showItem: function(id){
        this.hide();
        for (i in this.classArray){
            $('#' + id + ' ' + this.classArray[i]).css('display','block');
        }
        
    },
    init: function(){
        $(this.cFCloseClass).click(function(){
            campusSideMap.hide();
            return false;
        })

        $(this.cFButtonClass).click(function(){
            campusSideMap.showItem($(this).parent().attr('id'));
            return false;
        });
    }

}