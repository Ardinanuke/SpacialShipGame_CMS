var InstanceSelection = {
    clickedTab: function(tabId) {
        tabId = '#' + tabId;

        if (!jQuery(tabId).length) {
            return;
        }

        if (jQuery(tabId).hasClass('region_active')) {
            return;
        }

        // slide up active tab and set inactive
        var activeTabId = '#' + jQuery('.region_active').attr('id').replace(/tab/, 'list');
        jQuery(activeTabId).slideUp('slow');
        jQuery('.serverSelection_tab').removeClass('region_active');

        // set clicked tab active and slide down
        jQuery(tabId).addClass('region_active');
        var listId = '#' + jQuery(tabId).attr('id').replace(/tab/, 'list');
        jQuery(listId).slideDown('slow');
    },

    clickedIni: function(elm) {
        var iniElm = jQuery('#' + elm.id);

        iniElm.addClass('ini_clicked');
        var targetUrl = iniElm.attr('target');
        // make it clickable only once
        iniElm.attr('target', 'done');

        // get instanceId for tracking
        tmp_array = iniElm.attr('id').split("_");
        target = tmp_array[tmp_array.length-1];

        BpEventStream.track('pageview.changeInstance', {target:target});
        if (Main.windowSpaceMap) {
            // close open client on switching instance
            Main.windowSpaceMap.close();
        }

        // if not yet clicked redirect user to his final destination
        if ('done' != targetUrl) {
            window.open(targetUrl, '_self');
        }
    },

    closeSelection: function() {
        hideBusyLayer();
        jQuery('#serverSelection').remove();
    }
};

jQuery(document).ready(function() {
    /* center the instance selection */
//    var instanceSelection = jQuery('#serverSelection');
//    var isWidth = (instanceSelection.outerWidth() / 2);
//    instanceSelection.css('top', '200px');
//    instanceSelection.css('left', (((jQuery(window).width() - isWidth) / 2) + jQuery(window).scrollLeft() + 'px'));




    /* tab clicking behaviour */
//    jQuery('.serverSelection_tab').click(function() {
//        // don't do anything for active tab
//        if (jQuery(this).hasClass('region_active')) {
//            return;
//        }
//
//        // slide up active tab and set inactive
//        var activeIniId = '#' + jQuery('.region_active').attr('id').replace(/tab/, 'list');
//        jQuery(activeIniId).slideUp('slow');
//        jQuery('.serverSelection_tab').removeClass('region_active');
//
//        // set clicked tab active and slide down
//        jQuery(this).addClass('region_active');
//        var iniId = '#' + jQuery(this).attr('id').replace(/tab/, 'list');
//        jQuery(iniId).slideDown('slow');
//    });

    /* hover effects */
//    jQuery('.serverSelection_ini').mouseover(function() {
//        jQuery(this).addClass('ini_hover');
//    });
//    jQuery('.serverSelection_ini').mouseout(function() {
//        jQuery(this).removeClass('ini_hover');
//    });

    /* click affects and functionality for instances */
//    jQuery('.serverSelection_ini').click(function() {
//        jQuery(this).addClass('ini_clicked');
//        var targetUrl = jQuery(this).attr('target');
//        // make it clickable only once
//        jQuery(this).attr('target', 'done');
//
//        // if not yet clicked redirect user to his final destination
//        if ('done' != targetUrl) {
//            redirect(targetUrl);
//        }
//    });

    /* initializing the custom scroll bar */
    // this is needed because of crappy dependencies of external loaded lp-tool js
    //if ('undefined' == $_jq) {
    if(typeof($_jq) == "undefined") {
        var container = jQuery('#serverSelection');
        jQuery('body').append(container);
        jQuery('.scroll_pane').jScrollPane({autoReinitialise: true, showArrows: true});
    } else {

        var container = $_jq('#serverSelection');
        $_jq('body').append(container);
        $_jq('.scroll_pane').jScrollPane({autoReinitialise: true});


    }


});
