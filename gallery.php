<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    padding: 20px;
    justify-content: center;
}

.image-container {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.image-container:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.gallery-item {
    width: 80%;
    height: 90%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.image-container:hover .gallery-item {
    transform: scale(1.1);
}

.popup-text {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding: 10px;
    text-align: center;
    font-size: 14px;
    opacity: 0;
    transform: translateY(100%);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.image-container:hover .popup-text {
    opacity: 1;
    transform: translateY(0);
}
.buttons {
            text-align: center;
            margin-top: 10px;
            position:relative;
            top:10px;
            bottom:30px;
        }
        .buttons a {
            padding: 10px 15px;
            margin: 0 10px;
            text-decoration: none;
            color: white;
            background-color: #333;
            border-radius: 4px;
        }
        .buttons a:hover {
            background-color: #555;
        }
 </style>
</head>
<body>
    <div class="gallery">
        <div class="image-container">
            <img src="0J8A2405.JPG" alt="Image 1" class="gallery-item">
            <div class="popup-text">Prewedding</div>
        </div>
        <div class="image-container">
            <img src="IMG-20241220-WA0025.jpg" alt="Image 2" class="gallery-item">
            <div class="popup-text">Friends</div>
        </div>
        <div class="image-container">
            <img src="https://static.toiimg.com/thumb/116926099/116926099.jpg?height=746&width=420&resizemode=76&imgsize=67566" alt="Image 3" class="gallery-item">
            <div class="popup-text">Solo</div>
        </div>
        <!-- Repeat for up to 15 images -->
        <div class="image-container">
            <img src="https://images.squarespace-cdn.com/content/v1/56f18f1c7c65e42974ba15e6/1617977767663-5K6VRT7SV40S9ODUO8FC/Family+Baby+Photography+Niagara+Region+Professional+Photographer.jpg?format=2500w" alt="Image 4" class="gallery-item">
            <div class="popup-text">Family</div>
        </div>
        <div class="image-container">
            <img src="https://aarushireddy.com/cdn/shop/files/PinkLehengaBridal3.jpg?v=1715254597" alt="Image 5" class="gallery-item">
            <div class="popup-text">Elegance</div>
        </div>      
        <div class="image-container">
            <img src="IMG20240226122143.jpg" alt="Image 6" class="gallery-item">
            <div class="popup-text">Sister-Brother</div>
        </div>
        <div class="image-container">
            <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcStnONNpTfunCzJzpHFpbn6UQU5Gadxp4dG7TAr26283WMKNN3zqYdtlgSC3m-pQ7j3zjhuTm9fkYqtvzRqiRbscktJyu8vkRRmlxg1gemJ&usqp=CAc" alt="Image 7" class="gallery-item">
            <div class="popup-text">Flowers</div>
        </div>
        <div class="image-container">
            <img src="IMG20240902170114.jpg" alt="Image 8" class="gallery-item">
            <div class="popup-text">Animals</div>
        </div>
        <div class="image-container">
            <img src="https://c8.alamy.com/comp/FWMB2H/tiger-national-animal-of-india-FWMB2H.jpg" alt="Image 9" class="gallery-item">
        </div>
        <div class="image-container">
            <img src="https://cdn.shopify.com/s/files/1/3026/6974/files/bulldog-puppy.jpg?v=1533748956" alt="Image 10" class="gallery-item">
        </div>
        <div class="image-container">
            <img src="https://images.pexels.com/photos/56866/garden-rose-red-pink-56866.jpeg?cs=srgb&dl=pexels-pixabay-56866.jpg&fm=jpg" alt="Image 11" class="gallery-item">
        </div>
        <div class="image-container">
            <img src="https://www.southernliving.com/thmb/vwkCLtryLVSnZ4BSzZcEWmd1nPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-1303343479-2000-249216df6cd34871868206306931cece.jpg" alt="Image 12" class="gallery-item">
        </div>
        <div class="image-container">
            <img src="https://www.moananursery.com/wp-content/uploads/2023/04/evans_cherry-tree_fruit-close-up-scaled.jpg" alt="Image 13" class="gallery-item">
        </div>
        <div class="image-container">
            <img src="https://thumbs.dreamstime.com/b/pink-hibiscus-flower-rain-drops-green-leaves-background-generative-ai-design-instagram-facebook-wall-painting-327438088.jpg" alt="Image 14" class="gallery-item">
        </div>
        <div class="image-container">
            <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGZsb3dlcnxlbnwwfHwwfHx8MA%3D%3D" alt="Image 15" class="gallery-item">
        </div>
        <div class="image-container">
            <img src="https://images3.alphacoders.com/708/thumb-1920-708179.jpg" alt="Image 16" class="gallery-item">
        </div>
        <div class="image-container">
            <img src="https://cdn.pixabay.com/photo/2017/01/31/09/30/raspberries-2023404_640.jpg" alt="Image 16" class="gallery-item">
        </div>
        <div class="image-container">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/046/801/957/small_2x/variety-of-fresh-fruits-and-berries-splashing-into-water-photo.jpg" alt="Image 16" class="gallery-item">
        </div>
    </div>
    <div class="buttons">
        <a href="./index.php">Back to Home</a>
    </div>
</body>
</html>