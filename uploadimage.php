<!DOCTYPE html>
<html>

<head>
    <title>Firebase Image Upload using HTML and JavaScript</title>
    <style>
        #photo {
            margin-top: 200px;
            margin-left: 450px;
        }

        #upload {
            margin-top: 20px;
            margin-left: 450px;
        }
    </style>
</head>

<body>
    <input type="file" id="photo" /></br>
    <button id="upload" onclick="uploadImage()">Upload Image</button>
</body>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
<script>
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyBTjX7S3OoZtgeQYr5NMKjC0qWr4VtmZTg",
        authDomain: "restapiprevail.firebaseapp.com",
        databaseURL: "https://restapiprevail-default-rtdb.firebaseio.com",
        projectId: "restapiprevail",
        storageBucket: "restapiprevail.appspot.com",
        messagingSenderId: "73324380164",
        appId: "1:73324380164:web:c3ceeefb7bf110db9fb551",
        measurementId: "G-Q1XYB95T84"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    console.log(firebase);

    function uploadImage() {
        const ref = firebase.storage().ref("dokumen_pelanggan/");
        const file = document.querySelector("#photo").files[0];
        const name = + new Date() + " - Pelanggan " + file.name;
        const metadata = {
            contentType: file.type
        };
        const task = ref.child(name).put(file, metadata);
        task
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                console.log(url);
                alert('image uploaded successfully');
                document.querySelector("#image").src = url;
            })
            .catch(console.error);
    }
    
    const errorMsgElement = document.querySelector('span#errorMsg');
</script>

</html>