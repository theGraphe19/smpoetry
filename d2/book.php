<html>
<head>

<style>

html, body {
  margin: 0;
  height: 100%;
  cursor:grab;
/*
background-image:url('untitled.png');*/
  background-repeat: no-repeat;
  background-position: center;
 
  background-size: 100% auto;

}
#c {
  width: 100%;
  height: 100%;
  background-color: rgba(255,255,255,0);
  display: block;
}

</style>
</head>
<body>


<canvas id="c">
  
</canvas>








<script src="https://threejsfundamentals.org/threejs/resources/threejs/r105/three.min.js"></script>
<script src="https://threejsfundamentals.org/threejs/resources/threejs/r105/js/controls/OrbitControls.js"></script>
<script src="https://threejsfundamentals.org/threejs/resources/threejs/r105/js/loaders/LoaderSupport.js"></script>
<script src="https://threejsfundamentals.org/threejs/resources/threejs/r105/js/loaders/OBJLoader2.js"></script>
<script src="https://threejsfundamentals.org/threejs/resources/threejs/r105/js/loaders/MTLLoader.js"></script>







<script>






'use strict';

/* global THREE */

function main() {
  const canvas = document.querySelector('#c');
  const renderer =new THREE.WebGLRenderer({
    canvas,
     antialias: true,
    alpha: true,
  });

  const fov = 45;
  const aspect = 5;  // the canvas default
  const near = 0.1;
  const far = 100;
  const camera = new THREE.PerspectiveCamera(fov, aspect, near, far);
  camera.position.set(-15, 15, 25);

  const controls = new THREE.OrbitControls(camera, canvas);
  controls.target.set(0, 5, 0);

  controls.update();

  const scene = new THREE.Scene();
  // scene.background = new THREE.Color(0x0FFFFFF);

  {
    
  }

  {
    const skyColor = 0xFFFFFF;  // light blue
    const groundColor = 0xFFFFFF;  // brownish orange
    const intensity = 1;
    const light = new THREE.HemisphereLight(skyColor, groundColor, intensity);
    scene.add(light);
  }

  {
    const color = 0xFFFFFF;
    const intensity = 1;
    const light = new THREE.DirectionalLight(color, intensity);
    light.position.set(0, 3, -2);
    scene.add(light);
    scene.add(light.target);
  }

  {
    const objLoader = new THREE.OBJLoader2();
    objLoader.loadMtl('SHE/Plane01.mtl', null, (materials) => {
      
      objLoader.setMaterials(materials);
      objLoader.load('SHE/Plane01.obj', (event) => {
        const root = event.detail.loaderRootNode;
        root.position.y = 5;

        scene.add(root);
      });
    });
  }

  function resizeRendererToDisplaySize(renderer) {
    const canvas = renderer.domElement;
    const width = canvas.clientWidth;
    const height = canvas.clientHeight;
    const needResize = canvas.width !== width || canvas.height !== height;
    if (needResize) {
      renderer.setSize(width, height, false);
    }
    return needResize;
  }

  

  function render() {

    if (resizeRendererToDisplaySize(renderer)) {
      const canvas = renderer.domElement;
      camera.aspect = canvas.clientWidth / canvas.clientHeight;
      camera.updateProjectionMatrix();
    }

    renderer.render(scene, camera);

    requestAnimationFrame(render);
  }

  requestAnimationFrame(render);
}

main();



</script>


<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  



</body>
</html>