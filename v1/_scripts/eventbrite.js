
function eventbriteInit () {
 
    $('.join-eb-button').each(function () {
        var eventDataId = $(this).attr("data-id");
        var modalStr = "eventbrite-widget-modal-trigger-" + eventDataId;
        //console.log(modalStr);
        var exampleCallback = function() {
            console.log('Order complete!');
            };
        window.EBWidgets.createWidget({
                widgetType: 'checkout',
                eventId: eventDataId,
                modal: true,
                modalTriggerElementId: modalStr,
                onOrderComplete: exampleCallback
            });        
        });      
}






