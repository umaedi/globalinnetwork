importScripts('https://www.gstatic.com/firebasejs/9.2.0/firebase-app-compat.js');
importScripts('https://www.gstatic.com/firebasejs/9.2.0/firebase-messaging-compat.js');

// Inisialisasi Firebase di Service Worker
firebase.initializeApp({
    apiKey: "AIzaSyCvUPJmwjQyZof5HN19Tdm2AmgGuIX12eA",
    authDomain: "globalnetwork-5c900.firebaseapp.com",
    projectId: "globalnetwork-5c900",
    storageBucket: "globalnetwork-5c900.firebasestorage.app",
    messagingSenderId: "888777265294",
    appId: "1:888777265294:web:5d399f18042c76ec8df9df",
    measurementId: "G-ZTRM9SLYBS"
});

const messaging = firebase.messaging();

messaging.onBackgroundMessage((payload) => {
    console.log('[firebase-messaging-sw.js] Received background message ', payload);

    const notificationTitle = payload.notification.title || "Notifikasi Baru";
    const notificationOptions = {
        body: payload.notification.body || "Anda memiliki pesan baru.",
        icon: "/favicon.png", // Ganti dengan ikon aplikasi Anda
        data: { url: payload.notification.click_action || "/" } // URL yang akan dibuka
    };

    self.registration.showNotification(notificationTitle, notificationOptions);
});

// Handle klik pada notifikasi
self.addEventListener("notificationclick", (event) => {
    event.notification.close();
    if (event.notification.data && event.notification.data.url) {
        event.waitUntil(
            clients.openWindow(event.notification.data.url)
        );
    }
});
