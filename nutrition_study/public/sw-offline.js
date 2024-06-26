workbox.core.skipWaiting();
workbox.core.clientsClaim();

// fonts
workbox.routing.registerRoute(
    new RegExp('https://fonts.*'),
    workbox.strategies.cacheFirst({
        cacheName: 'fonts',
        plugins: [
            new workbox.cacheableResponse.Plugin({
                statuses: [0, 200]
            })
        ]
    })
);

// google stuff
workbox.routing.registerRoute(
    new RegExp('.*(?:googleapis|gstatic).com.*$'),
    workbox.strategies.networkFirst({
        cacheName: 'google'
    })
);

// static
workbox.routing.registerRoute(
    new RegExp('.(?:js|css|ico)$'),
    workbox.strategies.networkFirst({
        cacheName: 'static'
    }),
);

// images
workbox.routing.registerRoute(
    new RegExp('.(?:jpg|png|gif|svg)$'),
    workbox.strategies.cacheFirst({
        cacheName: 'images',
        plugins: [
            new workbox.expiration.Plugin({
                maxEntries: 20,
                purgeOnQuotaError: true,
            })
        ]
    })
);

// offline pages
workbox.routing.registerRoute(
    new RegExp('/(article/3)$'), // ← このページ「/article/3」をキャッシュする
    workbox.strategies.staleWhileRevalidate({
        cacheName: 'pages',
        plugins: [
            new workbox.expiration.Plugin({
                maxEntries: 20,
                purgeOnQuotaError: true,
            })
        ]
    })
);