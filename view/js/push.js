/**
 * Created by ali on 10.01.17.
 */

'use strict';
function SendPushMe() {
    if ('serviceWorker' in navigator) {
        console.log('Service Worker');
        navigator.serviceWorker.ready.then(function(reg) {
            console.log('Service Worker is ready.', reg);
            reg.pushManager.subscribe({userVisibleOnly: true}).then(function(sub) {
                $.get( "gcm.php?gcm=" + sub.endpoint, function( data ) {});
            }).catch(function(error) {
                console.log('Service close button click');
            });
        }).catch(function(error) {
            console.log('Service not access.');
        });
    }
}