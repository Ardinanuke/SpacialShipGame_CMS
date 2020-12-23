var Main = {

    sId: null,
    clientTitleDefault:  Tools.Text.get("seo_title_client"),
    mapRevolutionDisplayMode: null,
    intervalId: null,
    windowSpaceMap: null,

    Initialize: function (mapRevolutionDisplayMode, sId) {

        this.sId = sId;
        this.mapRevolutionDisplayMode = mapRevolutionDisplayMode;
        this.fetchElements();
        this.initializeEventListeners();

    },

    fetchElements : function () {

    },

    /**
     * Listener when the web browser is focus / visible or not
     * FF3+, C13+, IE10+
     *
     */
    initializeEventListeners : function () {

        // use the property name to generate the prefixed event name
        var visProp = this.getHiddenProp();
        if (visProp) {
            var evtname = visProp.replace(/[H|h]idden/,'') + 'visibilitychange';
        //    document.addEventListener(evtname, this.visChange);
        }
    },

    /**
     * used by web window
     * @param key
     */
    openFlashClient:function () {
        var popupModifiers = "";

        if (this.mapRevolutionDisplayMode == "0") {
            var popupModifiers = 'width=' + screen.availWidth + ',' +
                'height=' + screen.availHeight + ',' +
                'top=0,' +
                'left=0,' +
                'menubar=no,' +
                'location=no,' +
                'titlebar=no,' +
                'status=yes,' +
                'toolbar=no,' +
                'resizable=yes';
        }
        var url = 'map-revolution';
        if(this.windowSpaceMap == null || this.windowSpaceMap.closed) {
            this.windowSpaceMap = window.open(url,'spaceMap', popupModifiers);

            //workaround special case.
            //if (this.windowSpaceMap.location.search.length == 0) {
            //this.windowSpaceMap.location = url;
            //}
        }

        if (this.windowSpaceMap == null) {
            return;
        }

        this.windowSpaceMap.moveTo(0, 0);
        this.windowSpaceMap.resizeTo(screen.availWidth, screen.availHeight);
        this.windowSpaceMap.focus();

        this.stopCurrentBlinking(this.intervalId);
        this.intervalId =  this.blinkHtmlTitle(this.windowSpaceMap);

        //after 10 seconds we removed the current interval (fallback for IE<10)
        setTimeout(function () {
            Main.clearCurrentInterval(Main.intervalId)
        }, 10000)

    },

    stopCurrentBlinking: function(intervalId){

        if(intervalId != null){
            //console.log("removing... " + intervalId);
            clearInterval(intervalId);
            this.windowSpaceMap.document.title =  Tools.Text.get("seo_title_client");
        }

    },


    /**
     * used by web  window
     * @param key
     */
    visChange: function(){

            if(Main.windowSpaceMap){

                if (!Main.isHidden()){
                Main.windowSpaceMap.InternalMapRevolution.clearCurrentInterval(Main.intervalId);
                   setTimeout(function(){
                     window.document.title = Tools.Text.get("seo_title_standard")
                   },1000);
                }

            }

    },

    /**
     * used by web window
     * Enable in website a feedback form
     */

    getHiddenProp: function () {
        var prefixes = ['webkit', 'moz', 'ms', 'o'];

        // if 'hidden' is natively supported just return it
        if ('hidden' in document) return 'hidden';

        // otherwise loop over all the known prefixes until we find one
        for (var i = 0; i < prefixes.length; i++) {
            if ((prefixes[i] + 'Hidden') in document)
                return prefixes[i] + 'Hidden';
        }

        // otherwise it's not supported
        return null;
    },

    /**
     * used by web window
     * Enable in website a feedback form
     */

    isHidden: function () {
        var prop = this.getHiddenProp();
        if (!prop) return false;

        return document[prop];
    },


    /**
     * Returns default title
     *
     */
    getDefaultTitle: function(){
        return Main.clientTitleDefault;
    },

    blinkHtmlTitle: function(winRef){

        var isOldTitle = true;
        var oldTitle  = Tools.Text.get("seo_title_client");
        var newTitle  = Tools.Text.get("seo_title_client_blinking");

        var interval = null;

        function changeTitle2() {
            winRef.document.title = isOldTitle ? oldTitle : newTitle;
            isOldTitle = !isOldTitle;
            //console.log("Blinking..." + this.intervalId)
        }

        this.intervalId = setInterval(changeTitle2, 700);
        return this.intervalId;

    },

    /**
     *
     * Clear the current blink
     * (fallback for IE<10)
     * @param intervalId
     * @param clientTitleDefault
     */
    clearCurrentInterval: function(intervalId){

        //clear interval
        clearInterval(intervalId);
        //console.log("Clearing..." + this.intervalId)
        //set document title by default if needed.
        if (this.windowSpaceMap){
            this.windowSpaceMap.document.title =  Tools.Text.get("seo_title_client");
        }

    },

    /**
     * get Instancelist with ajax
     */
    getInstanceList: function() {
        showBusyLayer();
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/instances.php',
            dataType: 'json',
            data: {command: "getInstanceList"},
            success: function(response) {
                if (response.result == 'OK') {
                    jQuery('#instanceList').html(response.code);
                    jQuery('.scroll_pane').jScrollPane({autoReinitialise: true});
                    jQuery('#instanceList').css({display: 'block'});
                } else {
                    jQuery('#userInfoButtonBlacklistUser').qtip({content: header_ttips.userInfo_blacklistUser,style: 'dohdr',position: {target: 'mouse'}});
                    hideBusyLayer();
                }
            }

        });
    },


    setUserToBlacklist: function(username) {
        showBusyLayer();
        this.showSpinner();
        this.hideUserInfoBox();
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/messaging.php',
            dataType: 'json',
            data: {command: "addToBlacklist", username: username},
            success: function(response) {
                if (response.result == 'OK') {
                    Main.hideSpinner();
                    jQuery('#userInfoButtonBlacklistUser').addClass('userInfoBlacklistActive');
                    jQuery('#userInfoButtonBlacklistUser').qtip({content: header_ttips.userInfo_blacklistUserListed,style: 'dohdr',position: {target: 'mouse'}});
                    Tools.Popup.Presets.showSuccessDialog(
                        Tools.Text.get('message_contact_block_user')
                    );
                    hideBusyLayer();
                } else {
                    jQuery('#userInfoButtonBlacklistUser').qtip({content: header_ttips.userInfo_blacklistUser,style: 'dohdr',position: {target: 'mouse'}});
                    hideBusyLayer();
                }
            }

        });
    },

    deleteUserFromBlacklist: function(username) {
        showBusyLayer();
        this.showSpinner();
        this.hideUserInfoBox();
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/messaging.php',
            dataType: 'json',
            data: {command: "blacklistRemove", username: username},
            success: function(response) {
                if (response.result == 'OK') {
                    Main.hideSpinner();
                    jQuery('#userInfoButtonBlacklistUser').addClass('userInfoBlacklistActive');
                    jQuery('#userInfoButtonBlacklistUser').qtip({content: header_ttips.userInfo_blacklistUserListed,style: 'dohdr',position: {target: 'mouse'}});
                    Tools.Popup.Presets.showSuccessDialog(
                        Tools.Text.get('message_contact_unblock_user')
                    );
                    hideBusyLayer();
                } else {
                    jQuery('#userInfoButtonBlacklistUser').qtip({content: header_ttips.userInfo_blacklistUser,style: 'dohdr',position: {target: 'mouse'}});
                    hideBusyLayer();
                }
            }

        });
    },
    sendInvite: function(userHash, inviterId) {
        showBusyLayer();
        this.showSpinner();
        this.hideUserInfoBox();
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/messaging.php',
            dataType: 'json',
            data: {command: "sendInvitation", userHash: userHash, inviterId: inviterId},
            success: function(response) {
                Main.hideSpinner();

                if (response.result == 'OK') {
                    Tools.Popup.Presets.showSuccessDialog(
                        Tools.Text.get('message_contact_invite_sended')
                    );
                } else {
                    let errorMessage = '';
                    switch (response.status) {
                        case 'blocked':
                            errorMessage = 'message_contact_user_is_blocking_contacts';
                            break;
                        case 'spam_lock':
                            errorMessage = 'message_contact_spam_lock';
                            break;
                        case 'failed':
                        default:
                            errorMessage = 'eqt_error_generic';
                    }
                    Tools.Popup.Presets.showErrorDialog(Tools.Text.get(errorMessage));
                }

                hideBusyLayer();
            }

        });
    },

    loadUserInfo: function(userId) {
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/user.php',
            dataType: 'json',
            data: {command: "loadUserInfo", userId:userId },
            success: function(response) {
                if (response.result == 'OK') {
                    jQuery('#userInfoLayer').html(response.code);
                    userInfoLayerLoad(response.userName, response.isBlockedByMe);
                } else {
                    Tools.Popup.Presets.showErrorDialog(response.message);
                }
            }

        });
    },

    loadClanInfo: function(clanId) {
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/clan.php',
            dataType: 'json',
            data: {command: "loadClanInfo", clanId: clanId},
            success: function(response) {
                if (response.result == 'OK') {
                    jQuery('#clanInfoLayer').html(response.code);
                    clanInfoLayerLoaded(response.clanName);
                } else {

                }
            }

        });
    },

    hideUserInfoBox: function() {
        jQuery('#userInfoBox').hide();
    },
    showSpinner : function() {
        jQuery('#spinner').removeClass('hidden');
    },
    hideSpinner : function() {
        jQuery('#spinner').addClass('hidden');
    },

    hideGeneralInfoLayer : function() {
        Tools.Popup.hideModalLayer();
        jQuery('#generalInfoPopup').fadeOut(500);
    },

    resetSkillTree: function() {
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/skillTree.php',
            dataType: 'json',
            data: {command: "reset"},
            success: function(response) {
                if (response.result == 'OK') {
                    jQuery('#researchpoints').html(response.newResearchPoints);
                    jQuery('#researchPointUsage').html(response.footerText);
                    jQuery('#skillContainer').html(response.html_skills);
                    jQuery('#skillResetButtonContainer').empty();
                    jQuery('#skill_tooltip_container').html(response.html_tooltips);
                    jQuery('#researchPoints_teaser_text').html(response.researchPoints_teaser_text);
                    jQuery('#response.researchPoints_teaser_image').html(response.researchPoints_teaser_text);
                    tooltip.init();
                    pilotSheet.ajaxLoader('hide');
                    Tools.Popup.Presets.showSuccessDialog(response.message);
                } else {
                    Tools.Popup.Presets.showErrorDialog(response.message);
                }
                jQuery('#popup').css({'top': '0', 'left': '260px'});
            }

        });
    },

    skillTreePurchaseLevelUp: function(skillId) {
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/skillTree.php',
            dataType: 'json',
            data: {command: "skillTreePurchaseLevelUp", skillId: skillId},
            success: function(response) {
                if (response.result == 'OK') {
                    jQuery('#researchpoints').html(response.newResearchPoints);
                    jQuery('#researchPointUsage').html(response.researchPointUsage);
                    jQuery('#skillContainer').html(response.html_skills);
                    jQuery('#skillResetButtonContainer').html(response.skillResetButtonContainer);
                    jQuery('#skill_tooltip_container').html(response.html_tooltips);
                    if (response.researchPoints_teaser_text == ""
                        && researchPoints_teaser_image == "") {
                        jQuery('#researchPoints_teaser_text').html();
                        jQuery('#researchPoints_teaser_image').html();
                    }
                    pilotSheet.updateSkillHasFinished();
                    tooltip.init();
                    //Tools.Popup.Presets.showSuccessDialog(response.message);
                } else {
                    Tools.Popup.Presets.showErrorDialog(response.message);
                }
                jQuery('#popup').css({'top': '0', 'left': '260px'});
            }

        });
    }
}
