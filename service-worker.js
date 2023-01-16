self.addEventListener('install', (e) => {
  // e.waitUntil(
  //   caches.open('blade').then((cache) => cache.addAll([
  //     '/',
  //     '/index.php',
  //     '/js/index.js',
  //     '/style/main.css',
  //   ])),
  // );
  console.log("installed");
});

self.addEventListener('fetch', (e) => {
  console.log(e.request.url);
  e.respondWith(
    caches.match(e.request).then((response) => response || fetch(e.request)),
  );
});
