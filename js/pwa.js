if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js').then(registration => {
        console.log("SW Registred!");
        console.log(registration);
    }).catch(error => {
        console.log("SW Registration Faild!");
        console.log(error);
    });
}


// if ('serviceWorker' in navigator) {
//     navigator.serviceWorker.register('/service-worker.js')
//     .then(function(registration) {
//       console.log('Registration successful, scope is:', registration.scope);
//     })
//     .catch(function(error) {
//       console.log('Service worker registration failed, error:', error);
//     });
//   }