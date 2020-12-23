/**
 * Text
 * Gets translated text from DOM.
 */
Tools.Text = {

    resources : {},


    Initialize : function () {
//        if ('undefined' === typeof Tools.Text.Parameters || 'undefined' === typeof Tools.Text.Parameters.resources) {
//            Tools.ErrorHandler.Events.onTypeUndefined('Tools.Text.Parameters');
//            Tools.Text.resources = {};
//        } else {
//            Tools.Text.resources = Tools.Text.Parameters.resources;
//        }
    },

    setResource: function(key, text){
       this.resources[key] = text;
    },

    getResources : function () {
        return Tools.Text.resources;
    },

    get : function (textIdentifier) {
        var resources   = Tools.Text.getResources(),
            text;

        if ('undefined' === typeof resources[textIdentifier]) {
            Tools.ErrorHandler.Events.onGeneralError('Unable to locate text for identifier "' + textIdentifier + '".');
        } else {
            text = resources[textIdentifier];
        }

        return text;
    },

    getWithReplacements : function (textIdentifier, replacementDictionary) {
        var text = Tools.Text.get(textIdentifier);

        jQuery.each(replacementDictionary, function (key, value) {
            text = text.replace(key, value);
        });

        return text;
    },

    getTextImageUrl : function (options) {
        var options         = ('undefined' === typeof options) ? {} : options,
            textIdentifier  = ('undefined' === typeof options.textIdentifier) ? 'title_error' : options.textIdentifier,
            fontSize        = ('undefined' === typeof options.fontSize) ? 12 : options.fontSize,
            font            = ('undefined' === typeof options.font) ? 'eurostyle_thea' : options.font,
            color           = ('undefined' === typeof options.color) ? 'white' : options.color,
            backgroundColor = ('undefined' === typeof options.backgroundColor) ? 'grey' : options.backgroundColor,
            userLanguage    = ('undefined' === typeof User) ? 'en' : User.getLanguage(),
            language        = ('undefined' === typeof options.language) ? userLanguage : options.language,
            url             = '/do_img/global/text_tf.esg?s=' + fontSize + '&t=' + textIdentifier + '&f=' + font + '&color=' + color + '&bgcolor=' + backgroundColor + '&l=' + language;

        return url;
    },

    /**
     * Formats a number.
     *
     * 'numberOfDecimals' is calculated by converting the float 'numberToFormat'
     * into a string, splitting it by '.' (decimal point in JavaScript) and then
     * getting the length of the second element (= decimal value).
     *
     * @source  http://phpjs.org/functions/number_format:481
     */
    getFormattedNumber : function (numberToFormat) {
        var number                  = Math.abs(numberToFormat),
            roundValue              = Math.ceil(number),
            numberAsString          = number + '',
            numberOfDecimals        = roundValue === numberToFormat ? 0 : numberAsString.split('.')[1].length,
            n                       = !isFinite(+number) ? 0 : +number,
            prec                    = !isFinite(+numberOfDecimals) ? 0 : Math.abs(numberOfDecimals),
            thousands_sep           = Tools.Text.get('thousands_separator'),
            decimal_sep             = Tools.Text.get('decimal_separator'),
            sep                     = ('undefined' === typeof thousands_sep) ? '.' : thousands_sep,
            dec                     = ('undefined' === typeof decimal_sep) ? ',' : decimal_sep,
            s                       = '',
            toFixedFix              = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };

        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }

        return s.join(dec);
    }
};
