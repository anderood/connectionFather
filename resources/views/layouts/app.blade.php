<!DOCTYPE html>
<html>
<head>
    <title>My PWA</title>
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#000000">
</head>
<body>
<h1>Welcome to My Laravel PWA</h1>

<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js')
            .then(() => console.log('Service Worker registered!'))
            .catch((error) => console.error('Service Worker registration failed:', error));
    }
</script>
</body>
</html>
