import "./bootstrap";

import Alpine from "alpinejs";
import AOS from "aos";
import "aos/dist/aos.css";

window.addEventListener("load", () => {
    AOS.init({
        offset: 0,
        once: true,
    });

    setTimeout(() => AOS.refresh(), 10);
});

window.Alpine = Alpine;
Alpine.start();
