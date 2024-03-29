<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>proyecto de prueba </title>
  <link rel="stylesheet" type="text/css" href="index.css">

  <!-- We've included a slightly modified version of A-Frame, which fixes some polish concerns -->
  <script src="//cdn.8thwall.com/web/aframe/8frame-0.8.2.min.js"></script>

  <!-- XR Extras - provides utilities like load screen, almost there, and error handling.
         See github.com/8thwall/web/xrextras -->
  <script src="//cdn.8thwall.com/web/xrextras/xrextras.js"></script>

  <!-- 8thWall Web - Replace the app key here with your own app key -->
  <script
    src="//apps.8thwall.com/xrweb?appKey=4hRA5VHQkiOTjypYYlRxXeuKZ53IFzO17SgKRYMBGexDBlyK82ypia7bVX1GKEPWoWWp7W"></script>

  <!-- client code -->
  <script src="index.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body>
  <!-- If your app only interacts with image targets and not the world, disabling world tracking can
       improve speed. -->
  <a-scene
    antialias="true"
    xrweb="disableWorldTracking: true"
    xrextras-almost-there
    xrextras-loading
    xrextras-runtime-error>

    <a-assets>
      <a-asset-item id="frame-glb" src="prox.glb"></a-asset-item>
    </a-assets>

    <a-camera position="0 4 10"> </a-camera>

    <a-light type="ambient" intensity="1.3"></a-light>

    <!-- A 3d object that tracks the image target. -->
    <a-entity image-target>
      <!--  Display a 3d model of an image frame. -->
      <a-entity id="frame"  position="1 -1 -3"  scale=".5 .5 .5" rotation="0 0 0" gltf-model="#frame-glb"></a-entity>

      <!-- Add extra lighting to highlight the 3d geometry of the image frame. -->
      <a-light type="directional" intensity="1" target="#frame" position="1.5 0.6 2.5"> </a-light>

      <!-- Display the image target's name as set in the 8th Wall console. -->
      <a-text targetname value="" align="center" width="1.75" position="0 -0.55 0.04"></a-text>
    </a-entity>

  </a-scene>
</body>

</html>
