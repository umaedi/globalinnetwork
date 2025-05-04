import "./bootstrap";
// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
// import { getAnalytics } from "firebase/analytics";
import { getMessaging, onMessage, getToken } from "firebase/messaging";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCvUPJmwjQyZof5HN19Tdm2AmgGuIX12eA",
  authDomain: "globalnetwork-5c900.firebaseapp.com",
  projectId: "globalnetwork-5c900",
  storageBucket: "globalnetwork-5c900.firebasestorage.app",
  messagingSenderId: "888777265294",
  appId: "1:888777265294:web:5d399f18042c76ec8df9df",
  measurementId: "G-ZTRM9SLYBS",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
// const analytics = getAnalytics(app);

// Initialize Firebase Cloud Messaging and get a reference to the service
const messaging = getMessaging(app);
onMessage(messaging, (payload) => {
  console.log("Message received: ", payload);
});

document.addEventListener("DOMContentLoaded", function () {
  let statusPopup = localStorage.getItem("notifPermission");
  if (statusPopup == "denied") {
    return;
  }

  let notifPopup = document.getElementById("notifPopup");
  if (Notification.permission === "default") {
    setTimeout(() => {
      notifPopup.style.display = "block";
    }, 3000);
  }

  let closePopup = document.getElementById("closePopup");
  closePopup.addEventListener("click", function () {
    notifPopup.style.display = "none";
    localStorage.setItem("notifPermission", "denied");
  });

  let requestButton = document.getElementById("requestNotification");
  if (requestButton) {
    requestButton.addEventListener("click", function () {
      notifPopup.style.display = "none";
      Notification.requestPermission().then((permission) => {
        if (permission === "granted") {
          localStorage.setItem("notifPermission", permission);
          getToken(messaging, {
            vapidKey:
              "BPY_9dc1MIaSpX4HlfpRTZk8J7gArQLkfbpRHAWeUw2sGldHuWpsjdZlhqd74XKfWLnWCU1v4sqMz_vgJKki7JE",
          })
            .then((currentToken) => {
              if (currentToken) {
                console.log("Token:", currentToken);
                // Kirim token ke server Laravel untuk disimpan
                fetch("/fcm_token/store", {
                  method: "POST",
                  headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                      "content"
                    ),
                  },
                  body: JSON.stringify({ token: currentToken }),
                })
                  .then((response) => response.json())
                  .then((data) => console.log("Token saved:", data))
                  .catch((error) =>
                    console.error("Error saving token:", error)
                  );
              } else {
                console.log("No registration token available.");
              }
            })
            .catch((err) => {
              console.log("Error retrieving token:", err);
            });
        } else {
          localStorage.setItem("notifPermission", permission);
        }
      });
    });
  }
});

if ("serviceWorker" in navigator) {
  navigator.serviceWorker
    .register("/firebase-messaging-sw.js")
    .then((registration) => {
      console.log("Service Worker registered:", registration);
    })
    .catch((error) => {
      console.log("Service Worker registration failed:", error);
    });
}
