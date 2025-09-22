<section class="hero position-relative vh-100">

    <canvas id="three-canvas"></canvas>
    <div class="hero-text overflow-hidden position-absolute start-50 top-50 translate-middle w-100">
        <h2 class="text-white text-center fs-104   text-uppercase">
            Stop Letting Competitors
            <span class="d-block text-secondary">Steal Your Customers</span>
        </h2>
    </div>
    <div class="bottom-0 end-0 position-absolute z-3 m-5">
        <div class="wrap">
            <a href="#digital-growth">
                <div class="scroll-wrap">
                    <div class="ring">
                        <img src="./assets/images/rotate.png" alt="Scroll Down Text" draggable="false">
                    </div>
                    <div class="center">
                        <img src="./assets/images/arrow.png" alt="Scroll Down Arrow" draggable="false">
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/three@0.158.0/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>

<script>
    const canvas = document.getElementById('three-canvas');
    const renderer = new THREE.WebGLRenderer({
        canvas,
        antialias: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 5;

    // --- Starfield ---
    const starCount = 8000;
    const positions = new Float32Array(starCount * 3);
    const colors = new Float32Array(starCount * 3);
    const color = new THREE.Color();

    for (let i = 0; i < starCount; i++) {
        const i3 = i * 3;
        positions[i3] = (Math.random() - 0.5) * 50;
        positions[i3 + 1] = (Math.random() - 0.5) * 50;
        positions[i3 + 2] = (Math.random() - 0.5) * 50;

        color.setHSL(Math.random(), 0.7, 0.6);
        colors[i3] = color.r;
        colors[i3 + 1] = color.g;
        colors[i3 + 2] = color.b;
    }

    const starGeo = new THREE.BufferGeometry();
    starGeo.setAttribute("position", new THREE.BufferAttribute(positions, 3));
    starGeo.setAttribute("color", new THREE.BufferAttribute(colors, 3));

    const starMat = new THREE.PointsMaterial({
        size: 0.06,
        vertexColors: true,
        transparent: true,
        opacity: 0.5,
        alphaTest: 0.5
    });

    const stars = new THREE.Points(starGeo, starMat);
    scene.add(stars);

    // Cursor interactivity
    let targetX = 0,
        targetY = 0;
    document.addEventListener("mousemove", (e) => {
        targetX = (e.clientX / window.innerWidth - 0.5) * 2;
        targetY = (e.clientY / window.innerHeight - 0.5) * 2;
    });

    function animate() {
        requestAnimationFrame(animate);
        stars.rotation.y += 0.0008;
        gsap.to(stars.rotation, {
            x: targetY * 0.5,
            y: targetX * 0.5,
            duration: 1.2,
            overwrite: true
        });
        renderer.render(scene, camera);
    }
    animate();

    // Resize
    window.addEventListener("resize", () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
</script>