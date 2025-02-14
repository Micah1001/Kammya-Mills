document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".hero", { opacity: 0, duration: 1, y: -50, ease: "power2.out" });
    gsap.from("h1", { opacity: 0, duration: 1.2, y: 30, ease: "power2.out", delay: 0.5 });
    gsap.from(".instruction", { opacity: 0, duration: 1.2, y: 30, ease: "power2.out", delay: 0.7 });
    gsap.from(".img-2", {
        opacity: 0, x: -100, duration: 1.5, ease: "power2.out",
        scrollTrigger: { trigger: ".img-2", start: "top 85%", toggleActions: "play none none none" }
    });
    gsap.from("form", {
        opacity: 0, y: 50, duration: 1.5, ease: "power2.out",
        scrollTrigger: { trigger: "form", start: "top 80%", toggleActions: "play none none none" }
    });

    gsap.utils.toArray(".Kammya-imgs").forEach((img) => {
        gsap.fromTo(img,
            { opacity: 0, y: 50 },
            {
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: img,
                    start: "top 85%",
                    end: "top 20%",
                    toggleActions: "play reverse play reverse"
                }
            }
        );
    });
    
    // Form submission handling
    document.getElementById("valentineForm").addEventListener("submit", function (e) {
        e.preventDefault();
        const name = document.getElementById("name").value.trim();
        if (!name) {
            alert("Please enter your name!");
            return;
        }
        alert(`Thank you for your response, ${name}! ❤️`);
        this.reset();
    });

    // Smooth rating display update
    const ratingInput = document.getElementById("rating");
    const ratingValue = document.getElementById("ratingValue");
    ratingInput.addEventListener("input", () => {
        ratingValue.textContent = ratingInput.value;
    });
});
