/**
 * Generic popup for DarkOrbit shop
 * 
 * @author  Wolfgang Timme <w.timme@bigpoint.net>
 */
Tools.Popup = {
    library     : null,
    callbacks   : {
        onGreenButtonClick  : null,
        onBlueButtonClick   : null,
        onCloseButtonClick      : null
    },

    Initialize : function () {
        this.library = new Storage();

        Tools.Popup.fetchObjects();
        Tools.Popup.initializeEventListeners();
        Tools.Popup.processPopupParameters();
    },
    
    fetchObjects : function () {
        var popup           = jQuery('#popup'),
            header          = popup.find('.header'),
            btnClose        = header.find('.button-close'),
            body            = popup.find('.body'),
            allIcons        = body.find('.icon'),
            iconQuestion    = body.find('.icon-question'),
            iconSuccess     = body.find('.icon-success'),
            iconError       = body.find('.icon-error'),
            content         = body.find('.content'),
            footer          = popup.find('.footer'),
            allButtons      = footer.find('.button'),
            btnGreen        = footer.find('.button-green'),
            btnGreenText    = btnGreen.find('.text'),
            btnBlue         = footer.find('.button-blue'),
            btnBlueText     = btnBlue.find('.text'),
            modalBackground = jQuery('#popup-modalBackground'),
            loading         = jQuery('#popup-loading');

        this.library.set('popup',           popup);
        this.library.set('header',          header);
        this.library.set('btnClose',        btnClose);
        this.library.set('body',            body);
        this.library.set('allIcons',        allIcons);
        this.library.set('iconQuestion',    iconQuestion);
        this.library.set('iconSuccess',     iconSuccess);
        this.library.set('iconError',       iconError);
        this.library.set('content',         content);
        this.library.set('footer',          footer);
        this.library.set('allButtons',      allButtons);
        this.library.set('btnGreen',        btnGreen);
        this.library.set('btnGreenText',    btnGreenText);
        this.library.set('btnBlue',         btnBlue);
        this.library.set('btnBlueText',     btnBlueText);
        this.library.set('modalBackground', modalBackground);
        this.library.set('loading',         loading);
    },
    
    initializeEventListeners : function () {
        var btnClose    = this.library.get('btnClose'),
            btnGreen    = this.library.get('btnGreen'),
            btnBlue     = this.library.get('btnBlue');
        
        Tools.addDefaultMouseEventBehaviour(btnClose);
        btnClose.live('click',  Tools.Popup.Events.onBtnCloseClick);

        Tools.addDefaultMouseEventBehaviour(btnGreen);
        btnGreen.live('click',  Tools.Popup.Events.onBtnGreenClick);

        Tools.addDefaultMouseEventBehaviour(btnBlue);
        btnBlue.live('click',   Tools.Popup.Events.onBtnBlueClick);
    },

    processPopupParameters : function () {
        var params,
            showOnLoad,
            type,
            content,
            btnGreen    = {};

        if ('undefined' !== typeof this.Parameters) {
            // Parameters given.
            params      = this.Parameters;

            showOnLoad  = ('undefined' !== typeof params.showOnLoad && true === params.showOnLoad) ? true : false;

            // Only continue with processing if the popup is supposed to be shown.
            if (showOnLoad) {
                type    = ('undefined' === typeof params.type) ? '' : params.type;
                this.setType(type);

                content = ('undefined' === typeof params.content) ? '' : params.content;
                this.setContent(content);

                // Show with single button
                this.showSingleButton(btnGreen);
            };
        };
    },

    setType : function (type) {
        // Hide all icons
        this.library.get('allIcons').hide();

        switch (type) {
            case 'question':
                this.library.get('iconQuestion').show();
                break;
            case 'error':
                this.library.get('iconError').show();
                break;
            case 'success':
                // Same as default, therefore no break here.
            default:
                this.library.get('iconSuccess').show();
                break;
        };
    },

    setContent : function (content) {
        this.library.get('content').html(content);
    },

    setCloseButtonCallback : function (callbackFunction) {
        this.callbacks.onCloseButtonClick = callbackFunction;
    },

    setGreenButtonCallback : function (callbackFunction) {
        this.callbacks.onGreenButtonClick = callbackFunction;
    },

    setBlueButtonCallback : function (callbackFunction) {
        this.callbacks.onBlueButtonClick = callbackFunction;
    },

    showSingleButton : function (btnGreen) {
        // Setup green button
        this.setupBtnGreen(btnGreen);

        // Hide blue button
        this.hideBtnBlue();

        this.show();
    },

    showMultipleButtons : function (btnGreen, btnBlue) {
        // Setup green button
        this.setupBtnGreen(btnGreen);

        // Setup blue button
        this.setupBtnBlue(btnBlue);

        // Show blue button
        this.showBtnBlue();

        this.show();
    },

    setupBtnGreen : function (btnGreen) {
        var args                = this.processBtnGreenArguments(btnGreen),
            backgroundImageUrl  = Tools.Text.getTextImageUrl({
                textIdentifier  : args.textIdentifier
            });

        // Set text background image
        this.library.get('btnGreenText').css('backgroundImage', 'url(' + backgroundImageUrl + ')');

        // Set callback
        this.setGreenButtonCallback(args.callback);
    },

    setupBtnBlue : function (btnBlue) {
        var args                = this.processBtnBlueArguments(btnBlue),
            backgroundImageUrl  = Tools.Text.getTextImageUrl({
                textIdentifier  : args.textIdentifier
            });

        // Set text background image
        this.library.get('btnBlueText').css('backgroundImage', 'url(' + backgroundImageUrl + ')');

        // Set callback
        this.setBlueButtonCallback(args.callback);
    },

    showBtnBlue : function () {
        // Show blue button
        this.library.get('btnBlue').show();

        // Tell footer that multiple buttons are visible
        this.library.get('footer').removeClass('single-button');
    },

    hideBtnBlue : function () {
        this.library.get('btnBlue').hide();

        // Tell footer that only one button is visible
        this.library.get('footer').addClass('single-button');
    },

    processBtnGreenArguments : function (argsGiven) {
        var arguments = {
                textIdentifier  : ('undefined' === typeof argsGiven.textIdentifier) ? 'ok' : argsGiven.textIdentifier,
                callback        : ('function' !== typeof argsGiven.callback) ? 'Tools.Popup.hide' : argsGiven.callback
            };

        return arguments;
    },

    processBtnBlueArguments : function (argsGiven) {
        var arguments = {
                textIdentifier  : ('undefined' === typeof argsGiven.textIdentifier) ? 'confirmBox_cancel' : argsGiven.textIdentifier,
                callback        : ('function' !== typeof argsGiven.callback) ? 'Tools.Popup.hide' : argsGiven.callback
            };

        return arguments;
    },

    Presets : {
        /**
         * Displays a question dialog with two buttons and the 'questionmark' icon.
         */
        showQuestionDialog : function (content, btnGreen, btnBlue) {
            var btnGreen    = ('undefined' === typeof btnGreen) ? {} : btnGreen,
                btnBlue     = ('undefined' === typeof btnBlue) ? {} : btnBlue,
                type        = 'question';

            // Set type
            Tools.Popup.setType(type);

            // Set content
            Tools.Popup.setContent(content);

            // Setup buttons
            Tools.Popup.showMultipleButtons(btnGreen, btnBlue);
        },

        /**
         * Displays a info dialog with one single buttons and the 'check' icon.
         */
        showSuccessDialog : function (content, btnGreen, btnBlue) {
            var btnGreen    = ('undefined' === typeof btnGreen) ? {} : btnGreen,
                type        = 'success';

            // Set type
            Tools.Popup.setType(type);

            // Set content
            Tools.Popup.setContent(content);

            // Setup button
            if ('undefined' === typeof btnBlue) {
                Tools.Popup.showSingleButton(btnGreen);
            } else {
                Tools.Popup.showMultipleButtons(btnGreen, btnBlue);
            };
        },

        /**
         * Displays a warning dialog with one single buttons and the 'error' icon.
         */
        showErrorDialog : function (content, btnGreen, btnBlue) {
            var btnGreen    = ('undefined' === typeof btnGreen) ? {} : btnGreen,
                type        = 'error';

            // Set type
            Tools.Popup.setType(type);

            // Set content
            Tools.Popup.setContent(content);

            // Setup button
            if ('undefined' === typeof btnBlue) {
                Tools.Popup.showSingleButton(btnGreen);
            } else {
                Tools.Popup.showMultipleButtons(btnGreen, btnBlue);
            };
        }
    },

    /**
     * Starts listening for keyDown events in body.
     * Is supposed to listen as long as the Popup is visible.
     * 
     * @param   void
     * @return  void
     * @author  Wolfgang Timme <w.timme@bigpoint.net>
     */
    startListeningForKeyDownEvents : function () {
        jQuery('body').live('keydown', Tools.Popup.Events.onBodyKeyDown);
    },

    /**
     * Stops listening for keyDown events in body.
     * Is supposed to be called when the popup is being hidden.
     * 
     * @param   void
     * @return  void
     * @author  Wolfgang Timme <w.timme@bigpoint.net>
     */
    stopListeningForKeyDownEvents : function () {
        jQuery('body').die('keydown', Tools.Popup.Events.onBodyKeyDown);
    },

    show : function () {
        // Start listening for keyDown events.
        this.startListeningForKeyDownEvents();
        
        // Hide loading
        this.library.get('loading').hide();

        // Align center
        this.alignCenter();

        // Show popup
        this.library.get('popup').show();

        // Show modal layer
        this.showModalLayer();
    },

    hide : function () {
        // Stop listening for keyDown events.
        this.stopListeningForKeyDownEvents();

        this.library.get('popup').hide();
        this.hideModalLayer();
    },

    resetCallbacks : function () {
        this.setGreenButtonCallback(null);
        this.setBlueButtonCallback(null);
        this.setCloseButtonCallback(null);
    },

    /**
     * Displays the background div that prevents clicking on the site's elements
     * when the popup is present.
     * Replaces the former 'busyLayer'.
     * 
     * @author  Wolfgang Timme <w.timme@bigpoint.net>
     */
    showModalLayer : function () {
        this.library.get('modalBackground').show();
    },

    hideModalLayer : function () {
        this.library.get('modalBackground').hide();
    },

    showLoadingDialog : function () {
        var loading = this.library.get('loading');

        // Make sure the popup is hidden
        this.library.get('popup').hide();

        // Align center
        this.alignCenter(loading);

        // Show loading
        loading.show();

        // Show modal layer
        this.showModalLayer();
    },

    hideLoadingDialog : function () {
        // Hide loading
        this.library.get('loading').hide();

        // Hide modal layer
        this.hideModalLayer();
    },

    /**
     * Aligns the popup at the center of the screen.
     * 
     * @author  Wolfgang Timme <w.timme@bigpoint.net>
     */
    alignCenter : function (objectToAlign) {
        var objectToAlign       = ('undefined' === typeof objectToAlign) ? this.library.get('popup') : objectToAlign,
            bodyOffsetWidth     = document.documentElement.offsetWidth,
            objectWidth         = objectToAlign.width(),
            // Take the banner (and it's margin) on the right hand side into account
            widthWithBanner     = objectWidth + 120,
            objectLeft          = (bodyOffsetWidth / 2) - (widthWithBanner / 2),
            bodyOffsetHeight    = document.documentElement.offsetHeight,
            objectHeight        = objectToAlign.height(),
            objectTop           = (bodyOffsetHeight / 2) - (objectHeight / 2);
        
        objectToAlign.css({
            top     : objectTop  + 'px',
            left    : objectLeft + 'px'
        });
    },

    callBtnGreenCallback : function () {
        // Hide the popup
        this.hide();

        if ('function' === typeof this.callbacks.onGreenButtonClick) {
            // Call function
            this.callbacks.onGreenButtonClick();
        };

        // Callback has been performed; clean up.
        Tools.Popup.Events.afterCallbackPerformed();
    },

    callBtnBlueCallback : function () {
        // Hide the popup
        this.hide();

        if ('function' === typeof this.callbacks.onBlueButtonClick) {
            // Call function
            this.callbacks.onBlueButtonClick();
        };

        // Callback has been performed; clean up.
        Tools.Popup.Events.afterCallbackPerformed();
    },

    callBtnCloseCallback : function () {
        // Hide the popup
        this.hide();

        if ('function' === typeof this.callbacks.onCloseButtonClick) {
            // Call function
            this.callbacks.onCloseButtonClick();
        };

        // Callback has been performed; clean up.
        Tools.Popup.Events.afterCallbackPerformed();
    },

    Events : {
        onBtnGreenClick : function (event) {
            Tools.Popup.callBtnGreenCallback();
        },

        onBtnBlueClick : function (event) {
            Tools.Popup.callBtnBlueCallback();
        },

        onBtnCloseClick : function (event) {
            Tools.Popup.callBtnCloseCallback();
        },

        afterCallbackPerformed : function () {
            Tools.Popup.resetCallbacks();
        },

        onBodyKeyDown : function (event) {
            if (27 === event.keyCode) {
                /**
                 * Escape key has been pressed. Behave as if the close button
                 * had been clicked.
                 */
                Tools.Popup.callBtnCloseCallback();
            };
        }
    }
};
