var InternalStart = {
    init: function () {
        this.updateServerTime();
        window.setInterval('InternalStart.updateServerTime()', 60000);

        jQuery("#serverTimeContainer").qtip({
            content: serverDate,
            style: 'dohdr',
            position: {target: 'mouse'}
        });

        this.rankingTabs();
    },

    rankingTabs: function () {
        jQuery('.rankingTab').click(function () {
            if (jQuery(this).hasClass('homeTabActive')) {
                return null;
            }

            var tabId = jQuery(this).attr('id');

            jQuery('.homeRankingTable').hide();
            jQuery('.rankingTab').removeClass('homeTabActive');
            jQuery(this).addClass('homeTabActive');

            if ('rankingTabLeft' == tabId) {
                jQuery('#ranking_Users').show();
            } else if ('rankingTabRight' == tabId) {
                jQuery('#ranking_Clans').show();
            }
        });
    },

    showCurrentEvent: function () {
        jQuery('#eventDisplay_upcoming').hide();
        jQuery('#eventDisplay_live').show();

        jQuery('#sidebarButtonUpcoming').show();
        jQuery('#sidebarButtonCurrent').hide();
    },

    showUpcomingEvents: function () {
        jQuery('#eventDisplay_upcoming').show();
        jQuery('#eventDisplay_live').hide();

        jQuery('#sidebarButtonUpcoming').hide();
        jQuery('#sidebarButtonCurrent').show()
    },

    updateServerTime: function () {
        var hourBorder = 24;
        var minuteBorder = 59;

        var meridiem_text = '';

        if (meridiem) {
            hourBorder = 13;
            if (meridiem == 'am') {
                meridiem_text = meridiem_am;
            } else {
                meridiem_text = meridiem_pm;
            }
        }

        minute++;
        if (minute > minuteBorder) {
            minute = 0;
            hour++;
        }
        var _minute = "" + minute;
        if (_minute.length == 1) {
            _minute = '0' + _minute;
        }

        //hours
        if (hour > hourBorder) {
            if (meridiem) {
                hour = 1
                if (meridiem == "am") {
                    meridiem_text = meridiem_pm;
                } else {
                    meridiem_text = meridiem_am;
                }
            } else {
                hour = 0;
            }
        }
        var _hour = "" + hour;
        if (_hour.length == 1) {
            _hour = '0' + _hour;
        }

        jQuery('#serverTime').text(_hour + ':' + _minute);
        if (meridiem) {
            jQuery('#meridiem').text(meridiem_text);
        }
    }
};

var NewsController = {
    newsIndex: 0,
    lastIndex: 0,
    newsInterval: null,
    scrollPane: null,
    actionRunning: false,

    init: function () {
        if (newsItemIds !== undefined) {

            this.lastIndex = newsItemIds.length - 1;

            this.newsInterval = window.setInterval('NewsController.showNextEntry()', 10000);

            this.registerArrows();
            this.registerIcons(true);

            this.scrollPane = jQuery('.scroll-pane').jScrollPane({showArrows: true});

            // stop auto-switching if user clicks the news content area
            jQuery('.jspContainer').bind('click', function () {
                window.clearInterval(NewsController.newsInterval);
            });
        }
    },

    getPromoBanner: function () {
        jQuery('#newsText_PromoBanner').html(jQuery('#div_promoBanner').text())
    },

    registerArrows: function () {
        jQuery('.breakingNewsArrow').addClass('arrowInactive').unbind('click');

        if (this.newsIndex > 0) {
            jQuery('#breakingNewsLeftArrow').removeClass('arrowInactive').bind('click', function () {
                NewsController.showPrevEntry();
                window.clearInterval(NewsController.newsInterval);
            });
        }

        if (this.newsIndex < this.lastIndex) {
            jQuery('#breakingNewsRightArrow').removeClass('arrowInactive').bind('click', function () {
                NewsController.showNextEntry();
                window.clearInterval(NewsController.newsInterval);
            });
        }
    },

    registerIcons: function (isInit) {
        if (true === isInit) {
            jQuery('.breakingNewsIcon').click('click', function () {
                var iconId = jQuery(this).attr('id');
                var newsId = iconId.replace('newsIcon_', '');

                NewsController.switchToEntry(newsId);
                window.clearInterval(NewsController.newsInterval);
            });
        }

        // set news icon highlight position
        jQuery('#newsIconHighlight').animate(
            {left: (this.newsIndex * 27) + 'px'},
            500
        );
    },

    showNextEntry: function () {
        if (true === this.actionRunning) {
            return null;
        }

        var nextEntry = parseInt(this.newsIndex) + 1;

        if (nextEntry > this.lastIndex) {
            nextEntry = 0;
        }

        this.switchToEntry(newsItemIds[nextEntry]);
    },

    showPrevEntry: function () {
        if (true === this.actionRunning) {
            return null;
        }

        var prevEntry = this.newsIndex - 1;

        if (0 > prevEntry) {
            prevEntry = this.lastIndex;
        }

        this.switchToEntry(newsItemIds[prevEntry]);
    },

    switchToEntry: function (entryId) {
        // check if entry exists
        var entryIndex = this.getIndexById(entryId)
        if (false === entryIndex) {
            return null;
        }

        if (true === this.actionRunning) {
            return null;
        }

        this.actionRunning = true;

        var prevId = newsItemIds[this.newsIndex];
        this.newsIndex = entryIndex;

        // update content
        jQuery('#newsImage_' + prevId).fadeOut(250, function () {
            jQuery('#newsImage_' + entryId).fadeIn(250);
        });

        jQuery('#newsText_' + prevId).fadeOut(250, function () {
            jQuery('#newsText_' + entryId).fadeIn(250, function () {
                // reinitialize scroll pane
                jQuery('.scroll-pane').jScrollPane({showArrows: true, autoReinitialise: true});

                NewsController.actionRunning = false;
            });
        });

        // decide to show or hide the overlay
        if (this.isUploadedNews(entryId)) {
            jQuery('#newsImageOverlay').hide();
        } else {
            jQuery('#newsImageOverlay').show();
        }

        // update arrows and icons
        this.registerArrows();
        this.registerIcons();
    },

    isUploadedNews: function (newsId) {
        for (var i in uploadedNewsIds) {
            if (newsId == uploadedNewsIds[i]) {
                return true;
            }
        }

        return false;
    },

    isFirstEntry: function (newsId) {
        return (newsItemIds[0] == newsId);
    },

    isLastEntry: function (newsId) {
        return (newsItemIds[this.lastIndex] == newsId);
    },

    getIndexById: function (newsId) {
        for (var i in newsItemIds) {
            if (newsItemIds[i] == newsId) {
                return i;
            }
        }

        return false;
    }
};

jQuery(document).ready(function () {
    InternalStart.init();
    //NewsController.init();
});
