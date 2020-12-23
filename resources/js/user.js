/**
 * User object for user-related functions.
 *
 * @author  Wolfgang Timme <w.timme@bigpoint.net>
 */
var User = {
    Initialize : function () {
        User.fetchElements();
    },

    fetchElements : function () {
        // Get Uridium and Credit amount container
        Library.set('uridiumAmount',   jQuery('#header_uri'));
        Library.set('creditsAmount',   jQuery('#header_credits'));
    },

    getParameters : function () {
        if ('undefined' === typeof User.Parameters) {
            Tools.ErrorHandler.Events.onTypeUndefined('User.Parameters');
        };

        return User.Parameters;
    },

    get : function (parameterName) {
        var parameters      = User.getParameters(),
            parameterValue  = parameters[parameterName];

        if ('undefined' === typeof parameterValue) {
            Tools.ErrorHandler.Events.onTypeUndefined('User.Parameters.' + parameterName);
        };

        return parameterValue;
    },

    set : function (parameterName, parameterValue) {
        if('undefined' === typeof User.Parameters){
            User.Parameters = {};
        }

        User.Parameters[parameterName] = parameterValue;
    },

    getBalance : function () {
        return User.get('balance');
    },

    getLanguage : function () {
        return User.get('language');
    },

    getDiscountFactor : function () {
        var discountFactor  = User.get('discountFactor');
        return ('number' === typeof discountFactor) ? discountFactor : 1;
    },

    /**
     * Updates the user's balance (Uridium and Credit amount) using
     * the given newBalance object and updates the balance displayed
     * in the upper right corner.
     *
     * @author  Wolfgang Timme <w.timme@bigpoint.net>
     */
    setBalance : function (newBalance) {
        // Set the new balance
        User.set('balance', newBalance);

        // Update the balance displayed.
        User.updateBalanceDisplayed();
    },

    getBalanceByCurrency : function (currency) {
        var balance             = User.getBalance(),
            balanceByCurrency   = balance[currency];

        return balanceByCurrency;
    },

    /**
     * Gets the user's balance by the given currencyType.
     *
     * @param   String  currencyType    either 'virtual' or 'real'
     * @param   int                     the user's balance for this currency.
     * @author  Wolfgang Timme <w.timme@bigpoint.net>
     */
    getBalanceByCurrencyType : function (currencyType) {
        var currency    = ('virtual' === currencyType) ? 'credits' : 'uridium',
            balance     = User.getBalanceByCurrency(currency);

        return balance;
    },

    getUridium : function () {
        return parseInt(User.getBalanceByCurrency('uridium'));
    },

    getCredits : function () {
        return User.getBalanceByCurrency('credits');
    },

    /**
     * Updates the user's balance at top of the page.
     *
     * @author  Wolfgang Timme <w.timme@bigpoint.net>
     */
    updateBalanceDisplayed : function () {
        var uridium             = User.getUridium(),
            uridiumFormatted    = Tools.Text.getFormattedNumber(uridium),
            credits             = User.getCredits(),
            creditsFormatted    = Tools.Text.getFormattedNumber(credits);

        Library.get('uridiumAmount').html(uridiumFormatted);
        Library.get('creditsAmount').html(creditsFormatted);
    },

    isActiveHangarEmpty : function () {
        var isActiveHangarEmpty = this.get('isActiveHangarEmpty');

        return 'undefined' !== typeof isActiveHangarEmpty && true === isActiveHangarEmpty;
    },

    isShipDumpEmpty : function () {
        var isShipDumpEmpty = this.get('isShipDumpEmpty');

        return 'undefined' !== typeof isShipDumpEmpty && true === isShipDumpEmpty;
    },

    setIsShipDumpEmpty : function (isShipDumpEmpty) {
        this.set('isShipDumpEmpty', isShipDumpEmpty);
    },

    loadHangarInfo: function(hangarId) {
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/user.php',
            dataType: 'json',
            data: {command: "loadhangarInfo", hangarId: hangarId},
            success: function(response) {
                if (response.result == 'OK') {
                    hangarInfoLayerLoaded(hangarId, response.code);
                } else {

                }
            }
        });
    },

    getAchievementPage: function(action, param) {
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/user.php',
            dataType: 'json',
            data: {command: "getAchievementPage", action: action, param: param},
            success: function(response) {
                if (response.result == 'OK') {
                    if(response.pageContent) {
                        jQuery('#pageContent').html(response.pageContent);
                    }
                    jQuery('#achievementContentRight').html(response.contentRight);
                    jQuery('.scroll-pane').jScrollPane({showArrows: true, autoReinitialise: true});
                    if (action == 'showTitles') {
                        Custom.init();
                    }
                } else {

                }
            }
        });
    },

    getInternalPilotPage: function(formValues) {
        jQuery.ajax({
            type: 'POST',
            url: '/ajax/user.php',
            dataType: 'json',
            data: {command: "getInternalPilotPage", formValues: formValues},
            success: function(response) {
                if (response.result == 'OK') {
                    if(response.pageContent) {
                        jQuery('#pageContent').html(response.pageContent);
                    }
                    jQuery('#achievementContentRight').html(response.contentRight);
                    jQuery('.scroll-pane').jScrollPane({showArrows: true, autoReinitialise: true});
                    if (action == 'showTitles') {
                        Custom.init();
                    }
                } else {

                }
            }
        });
    }

};
