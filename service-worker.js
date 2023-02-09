self.addEventListener('install', (e) => {
  e.waitUntil(
    caches.open('Smart Quote').then((cache) => cache.addAll([
      '/',
      '/index.php',
      '/js/index.js',
      '/style/main.css',
    ])),
  );
  console.log("installed");
});

self.addEventListener('fetch', (e) => {
  e.respondWith(
    caches.match(e.request).then(response => {
      return response || fetch(e.request);
    })
  );
});
