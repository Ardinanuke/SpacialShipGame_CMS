/**
 * Tools
 * Library with generic functions for DarkOrbit
 * 
 * @author  Wolfgang Timme <w.timme@bigpoint.net>
 */
var Tools = {
    Initialize : function () {},

    /**
     * Adds 'hover' functionality to the given element.
     */
    addDefaultMouseEventBehaviour : function (element) {
        element.live('mouseover',    Tools.Events.General.onMouseOver);
        element.live('mouseout',     Tools.Events.General.onMouseOut);
        element.live('mousedown',    Tools.Events.General.onMouseDown);
        element.live('mouseup',      Tools.Events.General.onMouseUp);
    },
    
    isNumeric : function (valueToCheck) {
        return !isNaN(valueToCheck) || 'number' === typeof valueToCheck
    },
    
    Events : {
        General : {
            onMouseOver : function (event) {
                jQuery(this).addClass('mouseOver');
            },
            
            onMouseOut : function (event) {
                jQuery(this).removeClass('mouseDown').removeClass('mouseOver');
            },
            
            onMouseDown : function (event) {
                jQuery(this).removeClass('mouseOver').addClass('mouseDown');
            },
            
            onMouseUp : function (event) {
                jQuery(this).removeClass('mouseDown').addClass('mouseOver');
            }
        }
    }
};