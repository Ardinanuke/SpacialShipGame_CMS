/**
 * Library
 * Used for storage so that the Global Scope is not cluttered with variables.
 * 
 * @author Wolfgang Timme <w.timme@bigpoint.net>
 */
var Library = {
    storage : {},
    
    get : function (key) {
        return Library.storage[key];
    },
    
    set : function (key, value) {
        Library.storage[key] = value;
    }
};

/**
 * Newer version
 */
var Storage = function () {
    this.storage = {};

    this.get = function (key) {
        return this.storage[key];
    };

    this.set = function (key, value) {
        this.storage[key] = value;
    };
};