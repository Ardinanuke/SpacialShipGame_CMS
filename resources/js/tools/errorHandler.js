/**
 * Error Handler for DarkOrbit
 * 
 * @author  Wolfgang Timme <w.timme@bigpoint.net>
 */
Tools.ErrorHandler = {
    Initialize : function () {
        // Attach error handler to window error event
        window.onerror = Tools.ErrorHandler.Events.onWindowError;
    },

    log : function (message) {
        if ('undefined' !== typeof console && 'function' === typeof console.log) {
            console.log(message);
        };
    },

    Events : {
        /**
         * General, not pre-defined errors.
         *
         * @author  Wolfgang Timme <w.timme@bigpoint.net>
         */
        onGeneralError : function (errorMsg) {
            Tools.ErrorHandler.log(errorMsg);
        },

        /**
         * Error handler for window.onerror events.
         * 
         * @author  Wolfgang Timme <w.timme@bigpoint.net>
         */
        onWindowError : function (errorMsg, url, lineNumber) {
            var errorMsgHtml = 'An error occurred.\n\n' + errorMsg + '\nin\n' + url + '\nat line ' + lineNumber;

            Tools.ErrorHandler.log(errorMsgHtml);            
        },

        /**
         * Error handler for AJAX request errors, such as parsing errors.
         * 
         * @author  Wolfgang Timme <w.timme@bigpoint.net>
         */
        onAjaxRequestError : function (jqXHR, textStatus, errorThrown) {
            Tools.ErrorHandler.log('An AJAX error occurred. This is what the server sent back:\n\n' + jqXHR.responseText);
        },

        onTypeUndefined : function (varName) {
            Tools.ErrorHandler.log('Warning: ' + varName + ' is undefined!');
        }
    }
};