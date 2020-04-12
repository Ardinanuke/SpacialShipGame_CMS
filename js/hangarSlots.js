function switchHangarView(selectedHangarId, slotId, activeState, hangarIsEmpty, template) {

    if (!hangarBarActive)  {
        return;
    }
    jQuery('.hangarSlot').removeClass('selected');
    if ('active' != activeState) {
        jQuery('#slot_'+slotId).addClass('selected');
        jQuery('#btnActivateHangarSlot').show();
        if (hangarIsEmpty) {
            jQuery('#btnActivateHangarSlot').hide();
        }
    } else {
        jQuery('#btnActivateHangarSlot').hide();
    }

    if (template == 'internalDock') {
        changeView('ship');
        switchHangar(selectedHangarId);
        getHangarName(selectedHangarId);
    } else {
        setHangarSelected(selectedHangarId);
        thisMovie("inventory").changeHangarSlot(slotId);
        getHangarName(selectedHangarId);
    }

    setSelectedHangarId(selectedHangarId);
}

function switchHangar(selectedHangarId) {
    jQuery.ajax({
        type: 'POST',
        url: '/ajax/hangar.php',
        dataType: 'json',
        data: {command: "switchHangar", hangarId: selectedHangarId},
        success: function(response) {
            if (response.result == 'OK') {
                jQuery('#overview_ship').html(response.overviewShip);
                jQuery('#overview_drones').html(response.overviewDrones);
                jQuery('#overview_pet').html(response.overviewPet);
                setHangarSelected(selectedHangarId);
                response.scriptShip;
                response.scriptDrones;
                response.scriptPet;
            }
        }
    });
}

function setHangarSelected(selectedHangarId) {
    jQuery.ajax({
        type: 'POST',
        url: '/ajax/hangar.php',
        dataType: 'json',
        data: {command: "setHangarSelected", hangarId: selectedHangarId},
        success: function(response) {
            if (response.result == 'OK') {
            }
        }
    });
}

function getHangarName(selectedHangarId) {
    jQuery.ajax({
        type: 'POST',
        url: '/ajax/hangar.php',
        dataType: 'json',
        data: {command: "getHangarName", hangarId: selectedHangarId},
        success: function(response) {
            if (response.result == 'OK') {
                setCurrentHangarName(response.hangarName);
            }
        }

    });
}

function changeHangarName(selectedHangarId) {
    var name = jQuery('#renameHangarInputField').val();
    var hangarId = jQuery('#hangar_Id').val();

    jQuery.ajax({
        type: 'POST',
        url: '/ajax/hangar.php',
        dataType: 'json',
        data: {command: "changeHangarName", hangarId: hangarId, name: name},
        success: function(response) {
            if (response.result == 'OK') {
                setNewHangerName(response.hangarName);
            } else {
                jQuery('#renameHangarContainer').css('display', 'none');
                jQuery('#renameHangarInputField').val(jQuery('#showHangarNameInUpperRightCornerText').text());
            }
            Tools.Popup.Presets.showSuccessDialog(response.text, {
                textIdentifier  : 'btn_ok'
            });
        }

    });
}

function showActivateButton() {
    jQuery('#btnActivateHangarSlot').show();
}

function setSelectedHangarId(selectedHangarId) {
    jQuery('#hangarView #hangarId').val(selectedHangarId);
    jQuery('.shipDumpForm input[name="hangarId"]').val(selectedHangarId);
}

var jsReadyForFlashEquipmentClient = false;
var isEventFired = false;
jQuery(document).ready(function(){
    jsReadyForFlashEquipmentClient = true;

    jQuery('#btnActivateHangarSlot').click(function() {

        if (!hangarBarActive || isEventFired)  {
            return;
        }
        isEventFired = true;

        if ('undefined' !== typeof Tools && 'undefined' !== Tools.Popup) {
            // Tools.Popup is present; show loading dialog
            Tools.Popup.showLoadingDialog();
        };
        jQuery('#hangarView').submit();
    });
})

function pageInit() {
    jsReadyForFlashEquipmentClient = true;
    document.forms["form1"].output.value += "\n" + "JavaScript is ready.\n";
}

function thisMovie(movieName) {
    if (navigator.appName.indexOf("Microsoft") != -1) {
        return window[movieName];
    } else {
        return document[movieName];
    }
}

function isReady() {
    return jsReadyForFlashEquipmentClient;
}

var hangarBarActive = true;
function setHangarBarActive(active) {
    hangarBarActive = active;
    if (true == hangarBarActive) {
        jQuery('#hangarSlotsDisable').hide();
    } else {
        jQuery('#hangarSlotsDisable').show();
    }
}
