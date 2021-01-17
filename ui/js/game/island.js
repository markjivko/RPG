/* global stephino_rpg_tools, stephino_rpg_data */
// Game:Island
jQuery(document).ready(function () { var islandObject = jQuery('[data-role="map-holder"]'); var islandId = parseInt(islandObject.attr('island-id'), 10); if (isNaN(islandId)) { islandId = 1; } stephino_rpg_tools.dialog.actions = { cityColonizeReviewButton: function(args) { if (jQuery.isArray(args) && 2 === args.length) { stephino_rpg_tools.dialog.show('dialogIslandColonizeReview', { islandId: parseInt(args[0], 10), islandSlot: parseInt(args[1], 10) }); } }, cityColonizeButton: function(args) { if(jQuery.isArray(args) && 4 === args.length) { jQuery(this).attr('disabled', 'disabled'); stephino_rpg_tools.ajax('actionIslandColonize', { islandId: parseInt(args[0], 10), islandSlot: parseInt(args[1], 10), colonizerCityId: parseInt(args[2], 10), colonizerEntityId: parseInt(args[3], 10) }, function(msg) { stephino_rpg_tools.map.sound.manager.trigger('dialogAction'); stephino_rpg_tools.dialog.hide(); }); } }, islandStatueUpgradeDialog: function() { stephino_rpg_tools.dialog.show('dialogIslandUpgrade', { islandId: islandId }); }, islandStatueUpgradeButton: function() { jQuery(this).attr('disabled', 'disabled'); stephino_rpg_tools.ajax('actionIslandUpgrade', { islandId: islandId, }, function(msg) { stephino_rpg_tools.dialog.hide(); }); } }; stephino_rpg_tools.ajax( 'cellsIsland', {islandId: islandId}, function(msg) { if (!msg.status) { return; } var info = msg.result; jQuery('[data-role="title"]').click(function() { stephino_rpg_tools.map.sound.manager.trigger('cellTap'); stephino_rpg_tools.dialog.show('dialogIslandInfo', { islandId: islandId }); }); stephino_rpg_tools.map.init( islandObject, jQuery('[data-role="map"]'), { background: stephino_rpg_data.theme_url + '/img/story/islands/' + info.islandConfig.id + '/full.jpg', marginTop: 50, marginBottom: 50, cellPaddingTop: 1, cellPaddingBottom: 1, cells: info.grid, trackerAttr: 'city-own', cellController: function(cellObject, payload) { var itemsHolder = jQuery('<div class="items-holder"></div>'); var itemsHolderEmpty = true; if ("object" === typeof payload.anim && null !== payload.anim) { jQuery.each(payload.anim, function(objectType, objectDetails){ jQuery.each(objectDetails, function(objectId, animationIds){ animationIds.forEach(function(animationId) { itemsHolder.append(jQuery('<div><div></div></div>').attr('anim', objectType + '-' + objectId + '-i-' + animationId)); itemsHolderEmpty = false; }); }); }); } if ("string" === typeof payload.type) { cellObject.attr('cell-type', payload.type); var cellItem = jQuery('<div class="cell-item"></div>'); if ('islandStatues' === payload.type) { cellObject.attr('cell-config-id', payload.data.id); cellItem.css({ 'background-image': 'url("' + stephino_rpg_data.theme_url + '/img/story/' + payload.type + '/' + payload.data.id + '/512.png")' }); } else { if (null !== payload.data) { cellObject.attr('cell-id', payload.data.city_id); cellObject.attr('city-own', payload._cityOwn ? 'true' : 'false'); cellItem.css({ 'background-image': 'url("' + stephino_rpg_data.theme_url + '/img/story/' + payload.type + '/' + payload.data.city_config_id + '/' + '512' + (1 === parseInt(payload.data.cityBkg, 10) ? '' : '-' + payload.data.cityBkg) + '.png' + '")' }); itemsHolder.append('<div class="label"><span>' + stephino_rpg_tools.utils.getCityName(payload.data) + '</span></div>'); } else { cellItem.addClass('vacant'); } } itemsHolder.append(cellItem); itemsHolderEmpty = false; } if (!itemsHolderEmpty) { cellObject.append(itemsHolder); } return !itemsHolderEmpty; }, cellTap: function(targetObject) { var cellObject = targetObject.hasClass('cell') ? targetObject : targetObject.parents('.cell'); switch (cellObject.attr('cell-type')) { case 'cities': stephino_rpg_tools.map.sound.manager.trigger('cellTap'); if ("undefined" !== typeof cellObject.attr('cell-id')) { stephino_rpg_tools.dialog.show('dialogCityInfo', { commonArgs: [cellObject.attr('cell-id')] }); } else { stephino_rpg_tools.dialog.show('dialogIslandColonizePrepare', { islandId: islandId, islandSlot: stephino_rpg_tools.utils.getSnakeLength( parseInt(cellObject.attr('cell-x'), 10), parseInt(cellObject.attr('cell-y'), 10) ) }, function(msg) { if ('undefined' !== typeof msg.cityConfigId && 'string' === typeof msg.title) { cellObject.attr('city-own', 'true'); cellObject.find('.cell-item').css({ 'background-image': 'url("' + stephino_rpg_data.theme_url + '/img/story/cities/' + msg.cityConfigId + '/512.png' + '")' }); cellObject.find('.items-holder').append('<div class="label"><span>' + msg.title + '</span></div>'); } }); } break; case 'islandStatues': stephino_rpg_tools.map.sound.manager.trigger('cellTap'); stephino_rpg_tools.dialog.show('dialogIslandInfo', { islandId: islandId }); break; } } } ); } );});